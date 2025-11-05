<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lydia Property</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav class="navbar custom-navbar">
            <div class="container-fluid nav-container">
                <!-- Logo -->
                <a href="{{ route('landing.index') }}" class="nav-logo">
                    <img src="{{ asset('images/Logo-ly.png') }}" alt="Lydia Property">
                </a>

                <!-- Menu -->
                <ul class="nav-menu">
                    <li class="nav-item"><a href="#home" class="nav-link">Beranda</a></li>
                    <li class="nav-item"><a href="#property" class="nav-link">Property</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Kontak</a></li>
                </ul>

                <!-- Hamburger (untuk mobile) -->
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Lydia Property. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MRCrQYXXK+9v5GsmIZWnVdjOygU44zA6AJlC9Pj1sAgm+PZQjZ6drJwRkx6D6VLE" crossorigin="anonymous">
    </script>
</body>

</html>