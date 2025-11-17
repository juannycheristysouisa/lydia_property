<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Property Villa & Apartemen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="login-bg">
    <div class="login-wrapper">
        <div class="login-card" data-sr>
            <div class="text-center mb-4">
                <i class="fas fa-home fa-3x text-primary"></i>
                <h3 class="mt-3">Login Admin</h3>
                <p class="text-muted">Kelola Property Villa & Apartemen Anda</p>
            </div>

            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('admin.loginProcess') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label"><i class="fas fa-envelope"></i> Email</label>
                    <input type="email" name="email" id="email" class="form-control" required
                        placeholder="Masukkan email Anda">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><i class="fas fa-lock"></i> Password</label>
                    <input type="password" name="password" id="password" class="form-control" required
                        placeholder="Masukkan password Anda">
                </div>
                <button type="submit" class="btn btn-primary-admin btn-admin w-100"><i class="fas fa-sign-in-alt"></i>
                    Login</button>
            </form>

            <div class="text-center mt-3">
                <span>Belum punya akun?</span>
                <a href="{{ route('admin.register') }}" class="text-primary ms-1">Daftar di sini</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
    ScrollReveal().reveal('.login-card', {
        delay: 200,
        distance: '50px',
        origin: 'bottom'
    });
    </script>
</body>

</html>