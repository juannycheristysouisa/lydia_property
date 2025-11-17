<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-admin">
        <div class="navbar-brand">Admin Panel</div>
        <div>
            <a href="#" class="nav-link">Dashboard</a>
            <a href="#" class="nav-link">Properti</a>
            <a href="#" class="nav-link">Pemesanan</a>
            <a href="#" class="nav-link">Users</a>

            <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                @csrf
                <button class="btn-logout">Logout</button>
            </form>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="admin-container">

        <h2 class="page-title">Selamat Datang, Admin!</h2>

        <div style="display: flex; gap: 20px; flex-wrap: wrap;">

            <div class="card-admin" style="flex: 1; min-width: 250px;">
                <h5>Total Properti</h5>
                <h2>{{ $totalProperty ?? 0 }}</h2>
            </div>

            <div class="card-admin" style="flex: 1; min-width: 250px;">
                <h5>Pemesanan</h5>
                <h2>{{ $totalOrders ?? 0 }}</h2>
            </div>

            <div class="card-admin" style="flex: 1; min-width: 250px;">
                <h5>User Aktif</h5>
                <h2>{{ $activeUsers ?? 0 }}</h2>
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