<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <div class="d-flex">
                <a href="{{ route('admin.logout') }}" class="btn btn-outline-light btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="card p-4 shadow-sm">
            <h3 class="mb-4">Selamat Datang, Admin!</h3>
            <p>Ini adalah halaman dashboard admin yang menggunakan Bootstrap.</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Total Properti</h5>
                            <p class="card-text display-6">12</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Pemesanan</h5>
                            <p class="card-text display-6">5</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">User Aktif</h5>
                            <p class="card-text display-6">8</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MRCrQYXXK+9v5GsmIZWnVdjOygU44zA6AJlC9Pj1sAgm+PZQjZ6drJwRkx6D6VLE" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>