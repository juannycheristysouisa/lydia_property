<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Property Villa & Apartemen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Ikon Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="sidebar-brand">
            <i class="fas fa-cogs"></i>
            <span>Admin Panel</span>
        </div>

        <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>

        <a href="#" class="sidebar-link">
            <i class="fas fa-building"></i> Properti
        </a>

        <a href="#" class="sidebar-link">
            <i class="fas fa-calendar-check"></i> Pemesanan
        </a>

        <a href="#" class="sidebar-link">
            <i class="fas fa-users"></i> Users
        </a>

        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="sidebar-link btn-logout">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </nav>


    <div class="main-content">
        <div class="admin-container">
            <h2 class="page-title" data-sr><i class="fas fa-chart-line"></i> Selamat Datang, Admin!</h2>

            <div class="admin-card-wrapper row">
                <div class="col-md-4 mb-4">
                    <div class="card-admin text-center" data-sr>
                        <i class="fas fa-home fa-2x text-primary mb-3"></i>
                        <h5>Total Properti</h5>
                        <h2 class="text-primary">{{ $totalProperty ?? 0 }}</h2>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card-admin text-center" data-sr>
                        <i class="fas fa-shopping-cart fa-2x text-success mb-3"></i>
                        <h5>Total Pemesanan</h5>
                        <h2 class="text-success">{{ $totalOrders ?? 0 }}</h2>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card-admin text-center" data-sr>
                        <i class="fas fa-user-check fa-2x text-warning mb-3"></i>
                        <h5>User Aktif</h5>
                        <h2 class="text-warning">{{ $activeUsers ?? 0 }}</h2>
                    </div>
                </div>
            </div>

            <!-- Tambahan: Quick Actions -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card-admin" data-sr>
                        <h5><i class="fas fa-plus-circle"></i> Aksi Cepat</h5>
                        <a href="#" class="btn btn-primary-admin btn-admin me-2"><i class="fas fa-plus"></i> Tambah
                            Properti</a>
                        <a href="#" class="btn btn-success-admin btn-admin"><i class="fas fa-eye"></i> Lihat Laporan</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-admin" data-sr>
                        <h5><i class="fas fa-bell"></i> Notifikasi Terbaru</h5>
                        <p class="text-muted">Belum ada notifikasi baru.</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script>
        ScrollReveal().reveal('[data-sr]', {
            delay: 100,
            distance: '30px',
            origin: 'bottom',
            interval: 200
        });
        </script>
</body>

</html>