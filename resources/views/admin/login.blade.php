<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <div class="login-wrapper">
        <div class="login-card">
            <h3>Login Admin</h3>

            @if(session('error'))
            <div style="color: red; margin-bottom: 10px;">
                {{ session('error') }}
            </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <div>
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>

                <div>
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>

                <button class="btn-primary-admin btn-admin" style="width: 100%;">Login</button>
            </form>

            <!-- Tambahan Daftar -->
            <div style="text-align: center; margin-top: 15px;">
                <span style="color: #666;">Belum punya akun?</span>
                <a href="{{ route('admin.register') }}"
                    style="color: #3498db; text-decoration: none; font-weight: 600;">
                    Daftar di sini
                </a>
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