<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Form Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

    <section class="booking-section">
        <div class="container">
            <h2>Form Pemesanan</h2>

            {{-- Pesan sukses --}}
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form id="bookingForm" action="{{ route('booking.store') }}" method="POST">
                @csrf

                <input type="hidden" id="propertyName" name="property" />
                <input type="hidden" id="pricePerNight" name="price_per_night" />

                <div class="form-group">
                    <label for="name">Nama Lengkap*</label>
                    <input type="text" id="name" name="name" required placeholder="Masukkan nama lengkap sesuai KTP" />
                </div>

                <div class="form-group">
                    <label for="nik">NIK (Nomor Induk Kependudukan)*</label>
                    <input type="text" id="nik" name="nik" required placeholder="16 digit angka NIK" maxlength="16"
                        pattern="[0-9]{16}" />
                </div>

                <div class="form-group">
                    <label for="address">Alamat sesuai KTP*</label>
                    <textarea id="address" name="address" required
                        placeholder="Masukkan alamat lengkap sesuai KTP"></textarea>
                </div>

                <div class="form-group">
                    <label for="check_in">Tanggal Check-in *</label>
                    <input type="date" id="check_in" name="check_in" required />
                </div>

                <div class="form-group">
                    <label for="check_out">Tanggal Check-out *</label>
                    <input type="date" id="check_out" name="check_out" required />
                </div>

                <!-- Jumlah tamu -->
                <div class="form-group">
                    <label>Jumlah Tamu*</label>
                    <div class="guest-dropdown" id="guestDropdown">
                        <div id="guestSummary" class="guest-summary">
                            <i class="ri-user-line"></i>
                            <span id="guestText">2 dewasa · 0 anak</span>
                            <i class="ri-arrow-down-s-line"></i>
                        </div>

                        <div class="guest-options" id="guestOptions">
                            <div class="guest-item">
                                <span>Dewasa</span>
                                <div class="counter">
                                    <button type="button" onclick="changeValue('dewasa', -1)">−</button>
                                    <input type="text" id="dewasa" value="2" readonly />
                                    <button type="button" onclick="changeValue('dewasa', 1)">+</button>
                                </div>
                            </div>

                            <div class="guest-item">
                                <span>Anak-anak</span>
                                <div class="counter">
                                    <button type="button" onclick="changeValue('anak', -1)">−</button>
                                    <input type="text" id="anak" value="0" readonly />
                                    <button type="button" onclick="changeValue('anak', 1)">+</button>
                                </div>
                            </div>

                            <button type="button" id="selesaiBtn" class="selesai-btn">Selesai</button>
                        </div>
                    </div>
                </div>

                <!-- Ringkasan -->
                <div class="form-group">
                    <label>Ringkasan Pesanan</label>
                    <div id="bookingSummary" class="summary-box">
                        <p><strong>Jumlah Malam:</strong> <span id="summaryNights">0</span> malam</p>
                        <p><strong>Total Harga:</strong> Rp <span id="summaryTotal">0</span></p>
                    </div>
                </div>

                <button type="submit" class="submit-button">Lanjutkan ke Pembayaran</button>
            </form>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Lydia Property. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MRCrQYXXK+9v5GsmIZWnVdjOygU44zA6AJlC9Pj1sAgm+PZQjZ6drJwRkx6D6VLE" crossorigin="anonymous">
    </script>
</body>

</html>