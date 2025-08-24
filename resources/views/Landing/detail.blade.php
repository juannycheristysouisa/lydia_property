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
    <link rel="stylesheet" href={{ asset('css/style.css') }} />
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <a href="index.html" class="nav-logo">
                    <img src="images/Logo-ly.png" alt="Lydia Property" />
                </a>
            </div>
        </nav>
    </header>

    <section class="detail_section">
        <!-- Card 1 -->
        <div class="container detail_container property-detail" id="cannary">
            <h2 class="villa_name">Villa Cannary</h2>
            <p class="villa_location">Bandung</p>

            <div class="detail_image">
                <img src="images/villa-cannary-1.jpg" alt="Villa Cannary" />
            </div>

            <div class="view_photos">
                <button id="viewPhotosBtn-cannary">Lihat Semua Foto</button>
            </div>

            <div id="photoModal-cannary" class="modal">
                <div class="modal-content">
                    <span class="close-cannary">×</span>
                    <div class="photo-gallery">
                        <img src="images/villa-cannary-2.jpg" alt="Villa Cannary 2" />
                        <img src="images/villa-cannary-3.jpg" alt="Villa Cannary 3" />
                        <img src="images/villa-cannary-4.jpg" alt="Villa Cannary 4" />
                        <img src="images/villa-cannary-5.jpg" alt="Villa Cannary 5" />
                        <img src="images/villa-cannary-7.jpg" alt="Villa Cannary 6" />
                    </div>
                </div>
            </div>

            <div class="villa_description">
                <h3>Profil Villa</h3>
                <p>
                    Villa Cannary terletak di kawasan Bandung, villa berskala modern
                    dengan fasilitas lengkap dan suasana tenang. Dirancang untuk
                    kenyamanan keluarga atau liburan bersama teman, villa ini dilengkapi
                    dengan kolam renang pribadi, dapur lengkap, serta akses mudah ke
                    tempat wisata populer.
                </p>
            </div>

            <div class="villa_facilities">
                <h3>Fasilitas</h3>
                <ul>
                    <li><i class="ri-hotel-bed-line"></i> 7 Kamar Tidur</li>
                    <li><i class="ri-water-flash-line"></i> Kolam Renang</li>
                    <li><i class="ri-wifi-line"></i> Wi-Fi Gratis</li>
                    <li><i class="ri-parking-box-line"></i> Area Parkir Luas</li>
                    <li><i class="ri-restaurant-line"></i> Dapur Lengkap</li>
                    <li><i class="ri-music-2-line"></i> Karaoke Set</li>
                    <li><i class="ri-landscape-line"></i> Pemandangan Alam</li>
                </ul>
            </div>

            <div class="villa_location_detail">
                <h3>Detail Lokasi</h3>
                <p>
                    Jalan Tirtasari No.17, Parongpong, Bandung – dekat kawasan wisata
                    Lembang. Akses mudah ke Farm House, Floating Market, dan Dusun
                    Bambu.
                </p>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4869.714616778872!2d107.57933957584221!3d-6.793963893203326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e19240d21877%3A0xe580b95ef9006921!2sVilla%20Cannary!5e1!3m2!1sen!2sid!4v1756115224887!5m2!1sen!2sid"
                        width="600" height="450" style="border: 0; border-radius: 8px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="price_box">
                <h3>Harga</h3>
                <p class="villa_price">Rp 800.000<span>/night</span></p>
                <p class="price_note">
                    Termasuk: Kolam renang, WiFi, dapur, air mineral, dan area parkir.
                </p>
            </div>

            <div class="villa_actions">
                <p>Tertarik Menginap di Villa Cannary?</p>
                <h3>Rp 800.000<span>/night</span></h3>
                <button class="book_btn">Pesan Sekarang</button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="container detail_container property-detail" id="eldy">
            <h2 class="villa_name">Villa Eldy Cemagi</h2>
            <p class="villa_location">Canggu</p>
            <div class="detail_image">
                <img src="images/villa-eldi-cemagi-1.jpg" alt="Villa Eldy Cemagi" />
            </div>

            <div class="view_photos">
                <button id="viewPhotosBtn-eldy">Lihat Semua Foto</button>
            </div>

            <div id="photoModal-eldy" class="modal">
                <div class="modal-content">
                    <span class="close-eldy">×</span>
                    <div class="photo-gallery">
                        <img src="images/villa-eldi-cemagi-2.jpg" alt="Villa Eldy Cemagi" />
                        <img src="images/villa-eldi-camagi-7.webp" alt="Villa Eldy Cemagi" />
                        <img src="images/villa-eldi-cemagi-3.jpg" alt="Villa Eldy Cemagi" />
                    </div>
                </div>
            </div>

            <div class="villa_description">
                <h3>Profil Villa</h3>
                <p>
                    Villa Eldy Cemagi terletak di kawasan Canggu, Bali. Villa modern
                    dengan pemandangan sawah yang indah. Dirancang untuk liburan santai
                    dengan kolam renang pribadi dan dekorasi mewah.
                </p>
            </div>

            <div class="villa_facilities">
                <h3>Fasilitas</h3>
                <ul>
                    <li><i class="ri-hotel-bed-line"></i> 5 Kamar Tidur</li>
                    <li><i class="ri-water-flash-line"></i> Kolam Renang Infinity</li>
                    <li><i class="ri-wifi-line"></i> Wi-Fi Super Cepat</li>
                    <li><i class="ri-parking-box-line"></i> Area Parkir</li>
                    <li><i class="ri-restaurant-line"></i> Dapur Lengkap</li>
                    <li><i class="ri-service-line"></i> Layanan Kebersihan Harian</li>
                    <li><i class="ri-landscape-line"></i> Pemandangan Sawah</li>
                </ul>
            </div>

            <div class="villa_location_detail">
                <h3>Detail Lokasi</h3>
                <p>
                    Jalan Pantai Cemagi, Canggu, Bali – dekat dengan Pantai Berawa dan
                    Pura Tanah Lot.
                </p>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4874.873266765303!2d107.57933957587457!3d-6.793958566447069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e19240d21877%3A0xe580b95ef9006921!2sVilla%20Cannary!5e1!3m2!1sen!2sid!4v1755442929440!5m2!1sen!2sid"
                        width="600" height="450" style="border: 0; border-radius: 8px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="price_box">
                <h3>Harga</h3>
                <p class="villa_price">Rp 1.200.000<span>/night</span></p>
                <p class="price_note">
                    Termasuk: Kolam renang, WiFi, dapur, air mineral, dan area parkir.
                </p>
            </div>

            <div class="villa_actions">
                <p>Tertarik Menginap di Villa Eldy Cemagi?</p>
                <h3>Rp 1.200.000<span>/night</span></h3>
                <button class="book_btn">Pesan Sekarang</button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="container detail_container property-detail" id="umaberawa">
            <h2 class="villa_name">Villa Umaberawa</h2>
            <p class="villa_location">Bandung</p>
            <div class="detail_image">
                <img src="images/villa-umaberawa-1.jpg" alt="Villa Umaberawa" />
            </div>

            <div class="view_photos">
                <button id="viewPhotosBtn-eldy">Lihat Semua Foto</button>
            </div>

            <div id="photoModal-eldy" class="modal">
                <div class="modal-content">
                    <span class="close-eldy">×</span>
                    <div class="photo-gallery">
                        <img src="images/villa-umaberawa-2.jpg" alt="Villa Eldy Cemagi 2" />
                        <img src="images/villa-umaberawa-3.jpg" alt="Villa Eldy Cemagi 3" />
                        <img src="images/villa-umaberawa-4.jpg" alt="Villa Cannary 6" />
                    </div>
                </div>
            </div>

            <div class="villa_description">
                <h3>Profil Villa</h3>
                <p>
                    Villa Eldy Cemagi terletak di kawasan Canggu, Bali. Villa modern
                    dengan pemandangan sawah yang indah. Dirancang untuk liburan santai
                    dengan kolam renang pribadi dan dekorasi mewah.
                </p>
            </div>

            <div class="villa_facilities">
                <h3>Fasilitas</h3>
                <ul>
                    <li><i class="ri-hotel-bed-line"></i> 5 Kamar Tidur</li>
                    <li><i class="ri-water-flash-line"></i> Kolam Renang Infinity</li>
                    <li><i class="ri-wifi-line"></i> Wi-Fi Super Cepat</li>
                    <li><i class="ri-parking-box-line"></i> Area Parkir</li>
                    <li><i class="ri-restaurant-line"></i> Dapur Lengkap</li>
                    <li><i class="ri-service-line"></i> Layanan Kebersihan Harian</li>
                    <li><i class="ri-landscape-line"></i> Pemandangan Sawah</li>
                </ul>
            </div>

            <div class="villa_location_detail">
                <h3>Detail Lokasi</h3>
                <p>
                    Jalan Pantai Cemagi, Canggu, Bali – dekat dengan Pantai Berawa dan
                    Pura Tanah Lot.
                </p>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4874.873266765303!2d107.57933957587457!3d-6.793958566447069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e19240d21877%3A0xe580b95ef9006921!2sVilla%20Cannary!5e1!3m2!1sen!2sid!4v1755442929440!5m2!1sen!2sid"
                        width="600" height="450" style="border: 0; border-radius: 8px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="price_box">
                <h3>Harga</h3>
                <p class="villa_price">Rp 1.200.000<span>/night</span></p>
                <p class="price_note">
                    Termasuk: Kolam renang, WiFi, dapur, air mineral, dan area parkir.
                </p>
            </div>

            <div class="villa_actions">
                <p>Tertarik Menginap di Villa Eldy Cemagi?</p>
                <h3>Rp 1.200.000<span>/night</span></h3>
                <button class="book_btn">Pesan Sekarang</button>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="container detail_container property-detail" id="moiserenity">
            <h2 class="villa_name">Apartemen Moiserenity</h2>
            <p class="villa_location">Kelapa Gading</p>
            <div class="detail_image">
                <img src="images/apartemen-moiserenity-1.jpg" alt="Villa Eldy Cemagi" />
            </div>

            <div class="view_photos">
                <button id="viewPhotosBtn-eldy">Lihat Semua Foto</button>
            </div>

            <div id="photoModal-eldy" class="modal">
                <div class="modal-content">
                    <span class="close-eldy">×</span>
                    <div class="photo-gallery">
                        <img src="images/apartemen-moiserenity-2.jpg" alt="Villa Eldy Cemagi 2" />
                        <img src="images/apartemen-moiserenity-3.jpg" alt="Villa Eldy Cemagi 3" />
                        <img src="images/apartemen-moiserenity-3.jpg" alt="Villa Cannary 6" />
                    </div>
                </div>
            </div>

            <div class="villa_description">
                <h3>Profil Villa</h3>
                <p>
                    Villa Eldy Cemagi terletak di kawasan Canggu, Bali. Villa modern
                    dengan pemandangan sawah yang indah. Dirancang untuk liburan santai
                    dengan kolam renang pribadi dan dekorasi mewah.
                </p>
            </div>

            <div class="villa_facilities">
                <h3>Fasilitas</h3>
                <ul>
                    <li><i class="ri-hotel-bed-line"></i> 5 Kamar Tidur</li>
                    <li><i class="ri-water-flash-line"></i> Kolam Renang Infinity</li>
                    <li><i class="ri-wifi-line"></i> Wi-Fi Super Cepat</li>
                    <li><i class="ri-parking-box-line"></i> Area Parkir</li>
                    <li><i class="ri-restaurant-line"></i> Dapur Lengkap</li>
                    <li><i class="ri-service-line"></i> Layanan Kebersihan Harian</li>
                    <li><i class="ri-landscape-line"></i> Pemandangan Sawah</li>
                </ul>
            </div>

            <div class="villa_location_detail">
                <h3>Detail Lokasi</h3>
                <p>
                    Jalan Pantai Cemagi, Canggu, Bali – dekat dengan Pantai Berawa dan
                    Pura Tanah Lot.
                </p>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4874.873266765303!2d107.57933957587457!3d-6.793958566447069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e19240d21877%3A0xe580b95ef9006921!2sVilla%20Cannary!5e1!3m2!1sen!2sid!4v1755442929440!5m2!1sen!2sid"
                        width="600" height="450" style="border: 0; border-radius: 8px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="price_box">
                <h3>Harga</h3>
                <p class="villa_price">Rp 1.200.000<span>/night</span></p>
                <p class="price_note">
                    Termasuk: Kolam renang, WiFi, dapur, air mineral, dan area parkir.
                </p>
            </div>

            <div class="villa_actions">
                <p>Tertarik Menginap di Villa Eldy Cemagi?</p>
                <h3>Rp 1.200.000<span>/night</span></h3>
                <button class="book_btn">Pesan Sekarang</button>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>