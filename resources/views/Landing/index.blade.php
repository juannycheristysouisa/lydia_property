<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet">
    <title>Lydia Property - Villa dan Apartemen Premium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <a href="index.html" class="nav-logo">
                    <img src="images/Logo-ly.png" alt="Lydia Property" />
                </a>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#property" class="nav-link">Property</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Lydia Property</h1>
            <p>Property Rental in Indonesia | Renting Rooms and Villas</p>
            <a href="#property" class="cta-button">Lihat Property</a>
        </div>
    </section>

    <!-- Properties Section -->
    <section class="property" id="property">
        <div class="section_container property_container">
            <h2 class="section_header">Property in Your Area</h2>

            <div class="property_grid">
                <!-- CARD 1 -->
                <div class="property_card">
                    <img src="images/villa-cannary-1.jpg" alt="Villa Cannary" />
                    <div class="property_info">
                        <h4>Villa Cannary</h4>
                        <p class="location">Bandung, Indonesia</p>

                        @php
                        $hasBoked = true;
                        @endphp
                        <p class="price">
                            {{ $hasBooked ? 'sold out' : 'Rp 800.000' }}<span>/night
                                {{ $hasBooked ? '' : '/night' }}
                            </span>
                        </p>

                        <div class="property_details">

                            <span><i class="ri-hotel-bed-line"></i> 4 Kamar</span>
                            <span><i class="ri-shower-line"></i> 3 Kamar Mandi</span>
                        </div>
                        <a href="{{ route('landing.detail', ['id' => 'cannary']) }}" class="detail_btn">Lihat Detail</a>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="property_card">
                    <img src="images/villa-eldi-cemagi-1.jpg" alt="Villa Eldy Cemagi" />
                    <div class="property_info">
                        <h4>Villa Eldy Cemagi</h4>
                        <p class="location">Canggu, Indonesia</p>
                        <p class="price">Rp 1.200.000<span>/night</span></p>
                        <div class="property_details">
                            <span><i class="ri-hotel-bed-line"></i> 5 Kamar</span>
                            <span><i class="ri-shower-line"></i> 3 Kamar Mandi</span>
                        </div>
                        <a href="{{ route('landing.detail', ['id' => 'eldy']) }}" class="detail_btn">Lihat Detail</a>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="property_card">
                    <img src="images/villa-umaberawa-1.jpg" alt="Villa Umaberawa" />
                    <div class="property_info">
                        <h4>Villa Umaberawa</h4>
                        <p class="location">Bandung, Indonesia</p>
                        <p class="price">Rp 950.000<span>/night</span></p>
                        <div class="property_details">
                            <span><i class="ri-hotel-bed-line"></i> 4 Kamar</span>
                            <span><i class="ri-shower-line"></i> 3 Kamar Mandi</span>
                        </div>
                        <a href="{{ route('landing.detail', ['id' => 'umaberawa']) }}" class="detail_btn">Lihat
                            Detail</a>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="property_card">
                    <img src="images/apartemen-moiserenity-1.jpg" alt="Apartemen Moiserenity" />
                    <div class="property_info">
                        <h4>Apartemen Moiserenity</h4>
                        <p class="location">Kelapa Gading, Indonesia</p>
                        <p class="price">Rp 950.000<span>/night</span></p>
                        <div class="property_details">
                            <span><i class="ri-hotel-bed-line"></i> 4 Kamar</span>
                            <span><i class="ri-shower-line"></i> 3 Kamar Mandi</span>
                        </div>
                        <a href="{{ route('landing.detail', ['id' => 'moiserenity']) }}" class="detail_btn">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Gallery Section -->
    <section class="inspiration">
        <h2 class="section_header">Gallery Property</h2>
        <p class="section_description">
            View our hand-picked property destinations
        </p>
        <div class="inspiration_wrapper">
            <div class="inspiration_card">
                <img src="images/villa-cannary-2.jpg" alt="Villa Cannary Interior" />
                <h4>Villa Cannary</h4>
                <p>Bandung</p>
            </div>

            <div class="inspiration_card">
                <img src="images/villa-cannary-3.jpg" alt="Villa Cannary Pool" />
                <h4>Villa Cannary</h4>
                <p>Bandung</p>
            </div>

            <div class="inspiration_card">
                <img src="images/villa-cannary-5.jpg" alt="Villa Cannary View" />
                <h4>Villa Cannary</h4>
                <p>Bandung</p>
            </div>

            <div class="inspiration_card">
                <img src="images/villa-eldi-cemagi-4.jpg" alt="Villa Eldy Cemagi" />
                <h4>Villa Eldy Cemagi</h4>
                <p>Canggu</p>
            </div>

            <div class="inspiration_card">
                <img src="images/villa-umaberawa-1.jpg" alt="Villa Umaberawa" />
                <h4>Villa Umaberawa</h4>
                <p>Bandung</p>
            </div>

            <div class="inspiration_card">
                <img src="images/apartemen-moiserenity-2.jpg" alt="Apartemen Moiserenity" />
                <h4>Apartemen Moiserenity</h4>
                <p>Kelapa Gading</p>
            </div>

            <div class="inspiration_card">
                <img src="images/villa-eldi-cemagi-2.jpg" alt="Villa Eldy Cemagi Interior" />
                <h4>Villa Eldy Cemagi</h4>
                <p>Canggu</p>
            </div>

            <div class="inspiration_card">
                <img src="images/villa-umaberawa-3.jpg" alt="Villa Umaberawa Pool" />
                <h4>Villa Umaberawa</h4>
                <p>Bandung</p>
            </div>

            <div class="inspiration_card">
                <img src="images/apartemen-moiserenity-3.jpg" alt="Apartemen Moiserenity View" />
                <h4>Apartemen Moiserenity</h4>
                <p>Kelapa Gading</p>
            </div>

            <div class="inspiration_card">
                <img src="images/villa-cannary-7.jpg" alt="Villa Cannary Garden" />
                <h4>Villa Cannary</h4>
                <p>Bandung</p>
            </div>

            <div class="inspiration_card">
                <img src="images/villa-eldi-cemagi-3.jpg" alt="Villa Eldy Cemagi Pool" />
                <h4>Villa Eldy Cemagi</h4>
                <p>Canggu</p>
            </div>

            <div class="inspiration_card">
                <img src="images/villa-umaberawa-4.jpg" alt="Villa Umaberawa View" />
                <h4>Villa Umaberawa</h4>
                <p>Bandung</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <div class="contact-info">
                <p><i class="ri-phone-line"></i> +62 822-4654-9534</p>
                <p><i class="ri-mail-line"></i> Email : lydiaproperty@gmail.com</p>
                <p><i class="ri-map-pin-line"></i> Jl. Raya Contoh No. 123, Jakarta</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Lydia Property. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>