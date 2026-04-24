<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Kehadiran Kampus</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-container">
        <div class="login-left">
            <div class="login-branding">
                <i class="fas fa-university"></i>
                <h1>Universitas Winaya Mukti</h1>
                <p>Sistem Kehadiran Digital Kampus</p>
            </div>
        </div>
        <div class="login-right">
            <div class="login-form-container">
                <h2>Selamat Datang</h2>
                <p>Silakan masuk ke akun Anda</p>

                {{-- <div class="role-tabs">
                    <button class="role-tab active" data-role="mahasiswa">
                        <i class="fas fa-user-graduate"></i>
                        Mahasiswa
                    </button>
                    <button class="role-tab" data-role="dosen">
                        <i class="fas fa-chalkboard-teacher"></i>
                        Dosen
                    </button>
                    <button class="role-tab" data-role="admin">
                        <i class="fas fa-user-cog"></i>
                        Admin
                    </button>
                </div> --}}

                <form action="/login-proses" method="POST" class="login-form">
                    @csrf
                    @if (session('error'))
                        <p style="color:red">{{ session('error') }}</p>
                    @endif
                    <div class="form-group">
                        <label for="userId">
                            <i class="fas fa-id-card"></i>
                            <span id="userIdLabel">Email</span>
                        </label>
                        <input type="email" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">
                            <i class="fas fa-lock"></i>
                            Password
                        </label>
                        <div class="password-input">
                            <input type="password" name="password" placeholder="Masukkan Password" required>
                            <button type="submit" class="toggle-password">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    {{-- <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox" id="remember">
                            <span>Ingat saya</span>
                        </label>
                        <a href="#" class="forgot-password">Lupa password?</a>
                    </div> --}}
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fas fa-sign-in-alt"></i> Masuk
                    </button>
                </form>
                <a href="/">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <div class="login-help">
                    <p>Butuh bantuan? <a href="#">Hubungi Admin</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // // Role tab switching
        // document.querySelectorAll('.role-tab').forEach(tab => {
        //     tab.addEventListener('click', function() {
        //         document.querySelectorAll('.role-tab').forEach(t => t.classList.remove('active'));
        //         this.classList.add('active');

        //         const role = this.dataset.role;
        //         const userIdLabel = document.getElementById('userIdLabel');
        //         const userIdInput = document.getElementById('userId');

        //         if (role === 'mahasiswa') {
        //             userIdLabel.textContent = 'NIM';
        //             userIdInput.placeholder = 'Masukkan NIM';
        //         } else if (role === 'dosen') {
        //             userIdLabel.textContent = 'NIP';
        //             userIdInput.placeholder = 'Masukkan NIP';
        //         } else {
        //             userIdLabel.textContent = 'Username';
        //             userIdInput.placeholder = 'Masukkan username';
        //         }
        //     });
        // });

        // // Login form submission
        // document.getElementById('loginForm').addEventListener('submit', function(e) {
        //     e.preventDefault();
        //     const activeRole = document.querySelector('.role-tab.active').dataset.role;

        //     // Demo login - redirect based on role
        //     if (activeRole === 'mahasiswa') {
        //         window.location.href = '/mahasiswa';
        //     } else if (activeRole === 'dosen') {
        //         window.location.href = '/dosen';
        //     } else {
        //         window.location.href = '/admin';
        //     }
        // });

        // // Toggle password visibility
        // document.querySelector('.toggle-password').addEventListener('click', function() {
        //     const passwordInput = document.getElementById('password');
        //     const icon = this.querySelector('i');

        //     if (passwordInput.type === 'password') {
        //         passwordInput.type = 'text';
        //         icon.classList.remove('fa-eye');
        //         icon.classList.add('fa-eye-slash');
        //     } else {
        //         passwordInput.type = 'password';
        //         icon.classList.remove('fa-eye-slash');
        //         icon.classList.add('fa-eye');
        //     }
        // });
    </script>
</body>

</html>
