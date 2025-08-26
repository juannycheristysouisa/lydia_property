<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet" />
    <title>Lydia Property - Detail Properti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
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

<section class="detail_section">

    {{-- =================== VILLA CANNARY =================== --}}
    @if ($id === 'cannary')
        <div class="container detail_container property-detail">
            <h2 class="villa_name">Villa Cannary</h2>
            <p class="villa_location">Bandung</p>
            <div class="detail_image">
                <img src="{{ asset('images/villa-cannary-1.jpg') }}" alt="Villa Cannary" />
            </div>
            <div class="villa_description">
                <h3>Profil Villa</h3>
                <p>Villa Cannary terletak di kawasan Bandung, villa berskala modern dengan fasilitas lengkap dan suasana tenang.</p>
            </div>
            <div class="villa_facilities">
                <h3>Fasilitas</h3>
                <ul>
                    <li><i class="ri-hotel-bed-line"></i> 7 Kamar Tidur</li>
                    <li><i class="ri-water-flash-line"></i> Kolam Renang</li>
                    <li><i class="ri-wifi-line"></i> Wi-Fi Gratis</li>
                </ul>
            </div>
            <div class="villa_actions">
                <p>Tertarik Menginap di Villa Cannary?</p>
                <h3>Rp 800.000<span>/night</span></h3>
                <button class="book_btn">Pesan Sekarang</button>
            </div>
        </div>

    {{-- =================== VILLA ELDY CEMAGI =================== --}}
    @elseif ($id === 'eldy')
        <div class="container detail_container property-detail">
            <h2 class="villa_name">Villa Eldy Cemagi</h2>
            <p class="villa_location">Canggu</p>
            <div class="detail_image">
                <img src="{{ asset('images/villa-eldi-cemagi-1.jpg') }}" alt="Villa Eldy Cemagi" />
            </div>
            <div class="villa_description">
                <h3>Profil Villa</h3>
                <p>Villa Eldy Cemagi terletak di kawasan Canggu, Bali. Villa modern dengan pemandangan sawah yang indah.</p>
            </div>
            <div class="villa_facilities">
                <h3>Fasilitas</h3>
                <ul>
                    <li><i class="ri-hotel-bed-line"></i> 5 Kamar Tidur</li>
                    <li><i class="ri-water-flash-line"></i> Kolam Renang Infinity</li>
                    <li><i class="ri-wifi-line"></i> Wi-Fi Super Cepat</li>
                </ul>
            </div>
            <div class="villa_actions">
                <p>Tertarik Menginap di Villa Eldy Cemagi?</p>
                <h3>Rp 1.200.000<span>/night</span></h3>
                <button class="book_btn">Pesan Sekarang</button>
            </div>
        </div>

    {{-- =================== VILLA UMABERAWA =================== --}}
    @elseif ($id === 'umaberawa')
        <div class="container detail_container property-detail">
            <h2 class="villa_name">Villa Umaberawa</h2>
            <p class="villa_location">Bandung</p>
            <div class="detail_image">
                <img src="{{ asset('images/villa-umaberawa-1.jpg') }}" alt="Villa Umaberawa" />
            </div>
            <div class="villa_description">
                <h3>Profil Villa</h3>
                <p>Villa Umaberawa terletak di kawasan Bandung, cocok untuk keluarga besar atau acara spesial.</p>
            </div>
            <div class="villa_facilities">
                <h3>Fasilitas</h3>
                <ul>
                    <li><i class="ri-hotel-bed-line"></i> 6 Kamar Tidur</li>
                    <li><i class="ri-water-flash-line"></i> Kolam Renang</li>
                    <li><i class="ri-wifi-line"></i> Wi-Fi Gratis</li>
                </ul>
            </div>
            <div class="villa_actions">
                <p>Tertarik Menginap di Villa Umaberawa?</p>
                <h3>Rp 1.000.000<span>/night</span></h3>
                <button class="book_btn">Pesan Sekarang</button>
            </div>
        </div>

    {{-- =================== APARTEMEN MOISERENITY =================== --}}
    @elseif ($id === 'moiserenity')
        <div class="container detail_container property-detail">
            <h2 class="villa_name">Apartemen Moiserenity</h2>
            <p class="villa_location">Kelapa Gading</p>
            <div class="detail_image">
                <img src="{{ asset('images/apartemen-moiserenity-1.jpg') }}" alt="Apartemen Moiserenity" />
            </div>
            <div class="villa_description">
                <h3>Profil Apartemen</h3>
                <p>Apartemen Moiserenity terletak di Kelapa Gading, Jakarta, dengan fasilitas lengkap dan akses strategis.</p>
            </div>
            <div class="villa_facilities">
                <h3>Fasilitas</h3>
                <ul>
                    <li><i class="ri-hotel-bed-line"></i> 3 Kamar Tidur</li>
                    <li><i class="ri-water-flash-line"></i> Kolam Renang Komunal</li>
                    <li><i class="ri-wifi-line"></i> Wi-Fi Gratis</li>
                </ul>
            </div>
            <div class="villa_actions">
                <p>Tertarik Menginap di Apartemen Moiserenity?</p>
                <h3>Rp 900.000<span>/night</span></h3>
                <button class="book_btn">Pesan Sekarang</button>
            </div>
        </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MRCrQYXXK+9v5GsmIZWnVdjOygU44zA6AJlC9Pj1sAgm+PZQjZ6drJwRkx6D6VLE"
        crossorigin="anonymous"></script>
</body>
</html>
