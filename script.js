// === ScrollReveal animation setup ===
const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
  easing: "ease-in-out",
};

// Animasi di halaman utama (Tidak perlu DOMContentLoaded)
if (typeof ScrollReveal !== "undefined") {
  ScrollReveal().reveal(".hero-content h1", { ...scrollRevealOption });
  ScrollReveal().reveal(".hero-content p", {
    ...scrollRevealOption,
    delay: 400,
  });
  ScrollReveal().reveal(".cta-button", { ...scrollRevealOption, delay: 800 });
  ScrollReveal().reveal(".property_card", {
    ...scrollRevealOption,
    interval: 300,
  });

  // Animasi halaman detail (Jika ada)
  if (document.querySelector(".detail_section")) {
    ScrollReveal().reveal(".detail_image", {
      distance: "60px",
      origin: "top",
      duration: 800,
    });
    ScrollReveal().reveal(".villa_name", { delay: 300 });
    ScrollReveal().reveal(".price_box", { delay: 500 });
    ScrollReveal().reveal(".villa_description", { delay: 600 });
    ScrollReveal().reveal(".villa_facilities", { delay: 700 });
    ScrollReveal().reveal(".villa_actions", { delay: 900 });
  }

  // ScrollReveal untuk teks "Need Inspiration"
  ScrollReveal().reveal(".inspiration_section h2", {
    distance: "40px",
    origin: "bottom",
    duration: 1000,
    delay: 200,
  });
  ScrollReveal().reveal(".inspiration_section p", {
    distance: "40px",
    origin: "bottom",
    duration: 1000,
    delay: 400,
  });

  ScrollReveal().reveal(".villa_facilities", {
    delay: 500,
    distance: "50px",
    origin: "bottom",
    duration: 800,
  });
}

// === Auto-scroll horizontal inspirasi (opsional) ===
const inspiration = document.querySelector(".inspiration_wrapper");
if (inspiration) {
  const inspirationImages = Array.from(inspiration.children);
  inspirationImages.forEach((item) => {
    const duplicateNode = item.cloneNode(true);
    duplicateNode.setAttribute("aria-hidden", true);
    inspiration.appendChild(duplicateNode);
  });
}

// =======================================================
// === LOGIKA UTAMA YANG MENUNGGU DOM DIMUAT ===
// =======================================================
document.addEventListener("DOMContentLoaded", function () {
  // --- Logika Navbar Hamburger ---
  const hamburger = document.getElementById("hamburger");
  const navMenu = document.querySelector(".nav-menu");
  const navLinks = document.querySelectorAll(".nav-link");

  if (hamburger && navMenu) {
    hamburger.addEventListener("click", () => {
      navMenu.classList.toggle("active");
      hamburger.classList.toggle("active");
    });

    navLinks.forEach((link) => {
      link.addEventListener("click", () => {
        navMenu.classList.remove("active");
        hamburger.classList.remove("active");
      });
    });

    window.addEventListener("resize", () => {
      if (window.innerWidth > 768) {
        navMenu.classList.remove("active");
        hamburger.classList.remove("active");
      }
    });
  }

  // --- Logika Tombol Aksi Umum ---
  const contactBtn = document.querySelector(".contact_btn");
  const bookBtn = document.querySelector(".book_btn");

  if (contactBtn) {
    contactBtn.addEventListener("click", () => {
      alert("Hubungi kami di WhatsApp: +62 812-3456-7890");
    });
  }

  // --- Logika Detail Properti dan Modal Dinamis ---

  function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }

  const propertyId = getQueryParam("id");
  const isDetailPage = window.location.pathname.includes("detail.html"); // Cek URL

  if (isDetailPage && propertyId) {
    // 1. Sembunyikan semua properti, lalu tampilkan yang target
    const allProperties = document.querySelectorAll(".property-detail");
    allProperties.forEach((property) => {
      property.style.display = "none";
    });

    const targetProperty = document.getElementById(propertyId);

    if (targetProperty) {
      // Ini adalah baris ajaib yang membuat konten muncul
      targetProperty.style.display = "block";

      // 2. Inisialisasi Modal Galeri Dinamis untuk Properti yang Aktif
      const modalId = `photoModal-${propertyId}`;
      const btnId = `viewPhotosBtn-${propertyId}`;
      const closeClass = `close-${propertyId}`;

      const modal = document.getElementById(modalId);
      const btn = document.getElementById(btnId);
      // Gunakan querySelector pada elemen induk (targetProperty) agar lebih spesifik
      const closeBtn = modal ? modal.querySelector(`.${closeClass}`) : null;

      if (btn && modal && closeBtn) {
        btn.addEventListener("click", () => {
          modal.style.display = "block";
          document.body.style.overflow = "hidden";
        });

        closeBtn.addEventListener("click", () => {
          modal.style.display = "none";
          document.body.style.overflow = "auto";
        });

        window.addEventListener("click", (event) => {
          if (event.target === modal) {
            modal.style.display = "none";
            document.body.style.overflow = "auto";
          }
        });
      }
    } else {
      console.warn(
        "Properti dengan ID: " +
          propertyId +
          " tidak ditemukan, menampilkan halaman kosong."
      );
    }
  }
});

// === Tombol Pesan Sekarang ===
const pesanButtons = document.querySelectorAll(".pesan-btn");

pesanButtons.forEach((btn) => {
  btn.addEventListener("click", function () {
    const propertyName = this.getAttribute("data-property");
    const price = this.getAttribute("data-price");

    if (propertyName && price) {
      window.location.href = `booking.html?property=${encodeURIComponent(
        propertyName
      )}&price=${price}`;
    } else {
      alert("Data properti tidak ditemukan!");
    }
  });
});

const urlParams = new URLSearchParams(window.location.search);

// === Logika Tombol "Pesan Sekarang" ===
document.addEventListener("click", function (e) {
  if (e.target.classList.contains("book_btn")) {
    const property = e.target.getAttribute("data-property");
    const price = e.target.getAttribute("data-price");

    // Arahkan ke halaman booking dengan parameter di URL
    window.location.href = `booking.html?property=${encodeURIComponent(
      property
    )}&price=${price}`;
  }
});

// Dropdown toggle
const guestDropdown = document.getElementById("guestDropdown");
const guestSummary = document.getElementById("guestSummary");
const guestOptions = document.getElementById("guestOptions");
const selesaiBtn = document.getElementById("selesaiBtn");

guestSummary.addEventListener("click", () => {
  guestOptions.style.display =
    guestOptions.style.display === "block" ? "none" : "block";
});

selesaiBtn.addEventListener("click", () => {
  updateGuestText();
  guestOptions.style.display = "none";
});

// Ganti nilai dewasa/anak
function changeValue(id, change) {
  const input = document.getElementById(id);
  let value = parseInt(input.value) + change;
  if (value < 0) value = 0;
  input.value = value;
  updateGuestText();
  updateSummary();
}

// Update teks “2 dewasa · 1 anak”
function updateGuestText() {
  const dewasa = document.getElementById("dewasa").value;
  const anak = document.getElementById("anak").value;
  document.getElementById(
    "guestText"
  ).textContent = `${dewasa} dewasa · ${anak} anak`;
}

// Update otomatis ringkasan harga
const checkIn = document.getElementById("check_in");
const checkOut = document.getElementById("check_out");
const summaryPrice = document.getElementById("summaryPrice");
const summaryNights = document.getElementById("summaryNights");
const summaryTotal = document.getElementById("summaryTotal");

checkIn.addEventListener("change", updateSummary);
checkOut.addEventListener("change", updateSummary);

function updateSummary() {
  const price = 500000; // Harga per malam
  const inDate = new Date(checkIn.value);
  const outDate = new Date(checkOut.value);

  if (inDate && outDate && outDate > inDate) {
    const nights = Math.ceil((outDate - inDate) / (1000 * 60 * 60 * 24));
    summaryNights.textContent = nights;

    const dewasa = parseInt(document.getElementById("dewasa").value);
    const anak = parseInt(document.getElementById("anak").value);
    const totalTamu = dewasa + anak;

    const total = nights * price + totalTamu * 50000; // Tambahan biaya per tamu
    summaryTotal.textContent = total.toLocaleString("id-ID");
  }
}
