/**
 * LYDIA PROPERTY - Integrated JavaScript
 * Features: Hamburger Menu, Animations, Booking Logic, PDF Generator, WhatsApp Integration, & Photo Modals
 */

// 1. SCROLL REVEAL SETUP
const scrollRevealOption = {
    distance: "50px",
    origin: "bottom",
    duration: 1000,
    easing: "ease-in-out",
};

if (typeof ScrollReveal !== "undefined") {
    const sr = ScrollReveal();
    sr.reveal(".hero-content h1", { ...scrollRevealOption });
    sr.reveal(".hero-content p", { ...scrollRevealOption, delay: 400 });
    sr.reveal(".property_card", { ...scrollRevealOption, interval: 300 });
}

// 2. DOM CONTENT LOADED
document.addEventListener("DOMContentLoaded", function () {
    // --- A. LOGIKA MENU HAMBURGER (TAMBAHAN BARU) ---
    const menuIcon = document.getElementById("menu-icon");
    const navMenu = document.querySelector(".nav-menu");

    if (menuIcon && navMenu) {
        menuIcon.addEventListener("click", function (e) {
            e.stopPropagation(); // Mencegah klik menyebar
            navMenu.classList.toggle("active");

            // Animasi ganti icon (dari garis tiga ke silang)
            const icon = menuIcon.querySelector("i");
            if (navMenu.classList.contains("active")) {
                icon.classList.replace("ri-menu-line", "ri-close-line");
            } else {
                icon.classList.replace("ri-close-line", "ri-menu-line");
            }
        });

        // Klik link di dalam menu otomatis menutup menu
        document.querySelectorAll(".nav-menu a").forEach((link) => {
            link.addEventListener("click", () => {
                navMenu.classList.remove("active");
                menuIcon
                    .querySelector("i")
                    .classList.replace("ri-close-line", "ri-menu-line");
            });
        });

        // Klik di mana saja di luar menu otomatis menutup menu
        document.addEventListener("click", (e) => {
            if (!navMenu.contains(e.target) && !menuIcon.contains(e.target)) {
                navMenu.classList.remove("active");
                if (menuIcon.querySelector("i")) {
                    menuIcon
                        .querySelector("i")
                        .classList.replace("ri-close-line", "ri-menu-line");
                }
            }
        });
    }

    // --- B. Logika Modal Foto (VERSI PERBAIKAN) ---
    function initPhotoModal(btnId, modalId) {
        const btn = document.getElementById(btnId);
        const modal = document.getElementById(modalId);

        if (btn && modal) {
            // Cari tombol close khusus yang ada DI DALAM modal ini saja
            const closeBtn = modal.querySelector(".close");

            btn.addEventListener("click", () => {
                modal.style.display = "block";
                document.body.style.overflow = "hidden";
            });

            const closeModal = () => {
                modal.style.display = "none";
                document.body.style.overflow = "auto";
            };

            if (closeBtn) {
                closeBtn.addEventListener("click", closeModal);
            }

            // Klik di luar area modal untuk menutup
            window.addEventListener("click", (e) => {
                if (e.target === modal) closeModal();
            });
        }
    }

    // Inisialisasi ulang dengan parameter yang lebih sederhana
    initPhotoModal("viewPhotosBtn-cannary", "photoModal-cannary");
    initPhotoModal("viewPhotosBtn-eldy", "photoModal-eldy");
    initPhotoModal("viewPhotosBtn-umaberawa", "photoModal-umaberawa");
    initPhotoModal("viewPhotosBtn-apartemen", "photoModal-apartemen");

    // --- C. Logika Booking ---
    const urlParams = new URLSearchParams(window.location.search);
    const propName = urlParams.get("property");
    const propPrice = urlParams.get("price");

    if (propName && document.getElementById("propertyName"))
        document.getElementById("propertyName").value = propName;
    if (propPrice && document.getElementById("pricePerNight"))
        document.getElementById("pricePerNight").value = propPrice;

    const guestSummary = document.getElementById("guestSummary");
    const guestOptions = document.getElementById("guestOptions");
    const selesaiBtn = document.getElementById("selesaiBtn");

    if (guestSummary && guestOptions) {
        guestSummary.addEventListener("click", () => {
            guestOptions.style.display =
                guestOptions.style.display === "block" ? "none" : "block";
        });
    }
    if (selesaiBtn) {
        selesaiBtn.addEventListener("click", () => {
            guestOptions.style.display = "none";
        });
    }

    // Preview Bukti Transfer
    const proofInput = document.getElementById("proof_upload");
    const pdfProofImgRender = document.getElementById("pdf_proof_img_render");

    if (proofInput && pdfProofImgRender) {
        proofInput.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    pdfProofImgRender.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    const checkIn = document.getElementById("check_in");
    const checkOut = document.getElementById("check_out");

    function updateSummary() {
        const summaryNights = document.getElementById("summaryNights");
        const summaryTotal = document.getElementById("summaryTotal");
        const pPerNight =
            parseInt(document.getElementById("pricePerNight")?.value) || 0;

        if (checkIn?.value && checkOut?.value) {
            const inDate = new Date(checkIn.value);
            const outDate = new Date(checkOut.value);
            const diffDays = Math.ceil(
                (outDate - inDate) / (1000 * 60 * 60 * 24)
            );

            if (diffDays > 0 && summaryNights && summaryTotal) {
                summaryNights.textContent = diffDays;
                summaryTotal.textContent = (
                    diffDays * pPerNight
                ).toLocaleString("id-ID");
            } else if (summaryNights && summaryTotal) {
                summaryNights.textContent = "0";
                summaryTotal.textContent = "0";
            }
        }
    }

    if (checkIn) checkIn.addEventListener("change", updateSummary);
    if (checkOut) checkOut.addEventListener("change", updateSummary);

    // --- D. Submit Form & Generator PDF ---
    const bookingForm = document.getElementById("bookingForm");
    if (bookingForm) {
        bookingForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            const totalBayar =
                document.getElementById("summaryTotal").textContent;
            if (totalBayar === "0")
                return alert("Harap pilih tanggal yang valid!");
            if (!proofInput.files[0])
                return alert("Harap upload bukti transfer!");

            const submitBtn = document.querySelector(".submit-button");
            submitBtn.innerText = "Mencetak Voucher...";
            submitBtn.disabled = true;

            try {
                document.getElementById("pdf_name").innerText =
                    ": " + document.getElementById("name").value;
                document.getElementById("pdf_property").innerText =
                    ": " + document.getElementById("propertyName").value;
                document.getElementById("pdf_checkin").innerText =
                    ": " + checkIn.value;
                document.getElementById("pdf_checkout").innerText =
                    ": " + checkOut.value;
                document.getElementById("pdf_guests").innerText =
                    ": " + document.getElementById("guestText").textContent;
                document.getElementById("pdf_total").innerText =
                    ": Rp " + totalBayar;

                const { jsPDF } = window.jspdf;
                const canvas = await html2canvas(
                    document.getElementById("invoiceTemplate"),
                    { scale: 2 }
                );
                const pdf = new jsPDF("p", "mm", "a4");
                pdf.addImage(
                    canvas.toDataURL("image/png"),
                    "PNG",
                    0,
                    0,
                    210,
                    0
                );
                pdf.save(
                    `Voucher_${document.getElementById("name").value}.pdf`
                );

                const name = document.getElementById("name").value;
                const property = document.getElementById("propertyName").value;
                const textWA = `Halo Admin,%0A*LUNAS* - Booking Properti%0A*Nama:* ${name}%0A*Unit:* ${property}%0A*Total:* Rp ${totalBayar}%0A%0ABukti transfer terlampir.`;
                window.open(
                    `https://wa.me/6285333702719?text=${textWA}`,
                    "_blank"
                );
            } catch (err) {
                console.error(err);
                alert("Terjadi kesalahan teknis.");
            } finally {
                submitBtn.innerText = "Lanjutkan ke Pembayaran";
                submitBtn.disabled = false;
            }
        });
    }
});

// 3. GLOBAL FUNCTIONS
window.changeValue = function (id, change) {
    const input = document.getElementById(id);
    if (input) {
        let val = parseInt(input.value) + change;
        input.value = val < 0 ? 0 : val;

        const dewasa = document.getElementById("dewasa").value;
        const anak = document.getElementById("anak").value;
        const guestText = document.getElementById("guestText");
        if (guestText) {
            guestText.textContent = `${dewasa} dewasa · ${anak} anak`;
        }
    }
};
