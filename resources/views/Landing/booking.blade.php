<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Form Pemesanan | Lydia Property</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
    .payment-info-box {
        background: #f8f9fa;
        border: 1px dashed #1d3a4a;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .summary-box {
        background: #fff;
        border: 1px solid #eee;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <a href="{{ route('landing.index') }}" class="nav-logo">
                    <img src="{{ asset('images/Logo-ly.png') }}" alt="Lydia Property" />
                </a>
            </div>
        </nav>
    </header>

    <section class="booking-section py-5">
        <div class="container">
            <h2 class="mb-4">Form Pemesanan & Pembayaran</h2>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form id="bookingForm" action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" id="propertyName" name="property" />
                <input type="hidden" id="pricePerNight" name="price_per_night" />

                <div class="form-group mb-3">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="Nama Lengkap" />
                </div>

                <div class="form-group mb-3">
                    <label for="nik">NIK (16 Digit)</label>
                    <input type="text" id="nik" name="nik" class="form-control" required
                        placeholder="16 digit angka NIK" maxlength="16" pattern="[0-9]{16}" />
                </div>

                <div class="form-group mb-3">
                    <label for="address">Alamat sesuai KTP</label>
                    <textarea id="address" name="address" class="form-control" required
                        placeholder="Masukkan alamat lengkap"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label for="check_in">Tanggal Check-in</label>
                        <input type="date" id="check_in" name="check_in" class="form-control" required />
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="check_out">Tanggal Check-out</label>
                        <input type="date" id="check_out" name="check_out" class="form-control" required />
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Jumlah Tamu</label>
                    <div class="guest-dropdown border rounded p-2" id="guestDropdown" style="cursor: pointer;">
                        <div id="guestSummary" class="d-flex justify-content-between align-items-center">
                            <span><i class="ri-user-line"></i> <span id="guestText">2 dewasa · 0 anak</span></span>
                            <i class="ri-arrow-down-s-line"></i>
                        </div>

                        <div class="guest-options p-3 border mt-2 rounded bg-white" id="guestOptions"
                            style="display: none; position: absolute; z-index: 100; width: 300px;">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Dewasa</span>
                                <div class="counter d-flex align-items-center gap-2">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        onclick="changeValue('dewasa', -1)">-</button>
                                    <input type="text" id="dewasa" name="adults" value="2" readonly
                                        style="width: 30px; border: none; text-align: center;" />
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        onclick="changeValue('dewasa', 1)">+</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Anak-anak</span>
                                <div class="counter d-flex align-items-center gap-2">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        onclick="changeValue('anak', -1)">-</button>
                                    <input type="text" id="anak" name="children" value="0" readonly
                                        style="width: 30px; border: none; text-align: center;" />
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        onclick="changeValue('anak', 1)">+</button>
                                </div>
                            </div>
                            <button type="button" id="selesaiBtn" class="btn btn-primary btn-sm w-100">Selesai</button>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="note">Pesan Tambahan</label>
                    <textarea id="note" name="note" class="form-control" placeholder="Pesan Tambahan"></textarea>
                </div>

                <div class="payment-info-box">
                    <label class="fw-bold mb-2">Informasi Pembayaran (Transfer Bank)</label>
                    <div class="alert alert-secondary py-2 mb-3">
                        <p class="mb-0"><strong>Bank BCA:</strong> 1234567890</p>
                        <p class="mb-0"><strong>Atas Nama:</strong> Lydia Property</p>
                    </div>
                    <label for="proof_upload">Upload Bukti Transfer <span class="text-danger">*</span></label>
                    <input type="file" id="proof_upload" name="proof_upload" class="form-control" accept="image/*"
                        required />
                </div>

                <div class="form-group mb-4">
                    <label class="fw-bold">Ringkasan Pesanan</label>
                    <div id="bookingSummary" class="summary-box">
                        <p class="mb-1"><strong>Jumlah Malam:</strong> <span id="summaryNights">0</span> malam</p>
                        <p class="mb-1"><strong>Catatan:</strong> <span id="summaryNote">-</span></p>
                        <p class="mb-0 text-danger fs-5"><strong>Total Harga:</strong> Rp <span
                                id="summaryTotal">0</span></p>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-3 fw-bold submit-button">Submit & Share
                    pdf</button>
            </form>
        </div>
    </section>

    <div id="invoiceTemplate"
        style="position: absolute; left: -9999px; width: 700px; padding: 40px; background: white; color: #333; font-family: Arial, sans-serif;">
        <div style="text-align: center; border-bottom: 2px solid #1d3a4a; padding-bottom: 20px; margin-bottom: 25px;">
            <h1 style="margin: 0; color: #1d3a4a;">LYDIA PROPERTY</h1>
            <p style="margin: 5px 0; letter-spacing: 2px;">OFFICIAL BOOKING CONFIRMATION</p>
        </div>
        <table style="width: 100%; font-size: 15px; line-height: 2;">
            <tr>
                <td width="35%"><strong>Nama Pemesan</strong></td>
                <td id="pdf_name">: </td>
            </tr>
            <tr>
                <td><strong>Unit Properti</strong></td>
                <td id="pdf_property">: </td>
            </tr>
            <tr>
                <td><strong>Check-in</strong></td>
                <td id="pdf_checkin">: </td>
            </tr>
            <tr>
                <td><strong>Check-out</strong></td>
                <td id="pdf_checkout">: </td>
            </tr>
            <tr>
                <td><strong>Informasi Tamu</strong></td>
                <td id="pdf_guests">: </td>
            </tr>
            <tr>
                <td><strong>Pesan Tambahan</strong></td>
                <td id="pdf_note">: </td>
            </tr>
            <tr>
                <td><strong>Status</strong></td>
                <td style="color: green; font-weight: bold;">: LUNAS (PAID)</td>
            </tr>
            <tr style="border-top: 2px solid #eee;">
                <td style="padding-top: 15px; font-size: 18px;"><strong>Total Biaya</strong></td>
                <td id="pdf_total" style="padding-top: 15px; font-size: 22px; font-weight: bold; color: #e63946;">:
                </td>
            </tr>
        </table>

        <div style="margin-top: 30px;">
            <strong>Bukti Pembayaran:</strong><br>
            <img id="pdf_proof_img_render" src="" style="max-height: 250px; border: 1px solid #ccc; margin-top: 10px;">
        </div>

        <div style="margin-top: 40px; padding: 15px; background: #f9f9f9; font-size: 12px; color: #555;">
            <strong>Catatan & Ketentuan:</strong><br>
            1. Harap bawa file PDF ini atau tunjukkan saat check-in.<br>
            2. Bukti pembayaran telah terlampir dan diverifikasi otomatis.<br>
            3. Pesanan ini bersifat final dan dianggap sah.
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>