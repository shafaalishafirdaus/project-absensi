<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
    :root {
        --primary-color: #4f46e5;
        --bg-body: #f8fafc; /* Warna background luar agar kontainer terlihat menonjol */
        --bg-white: #ffffff;
        --text-dark: #1e293b;
        --border-color: #e2e8f0;
        --sidebar-width: 260px; /* Sesuaikan dengan lebar sidebar Anda */
    }

    body {
        margin: 0;
        padding: 0;
        background-color: var(--bg-body);
        /* font-family: 'Inter', sans-serif; */
    }

    /* WRAPPER UTAMA */
    .main-content {
        margin-left: var(--sidebar-width); /* Memberi ruang agar tidak tertutup sidebar */
        padding: 40px;
        min-height: 100vh;
        display: flex;
        justify-content: center; /* Menjaga kontainer tetap di tengah area konten */
        align-items: flex-start;
    }

    .profile-container {
        width: 100%;
        max-width: 1000px;
        background: var(--bg-white);
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    /* CSS lainnya tetap sama seperti sebelumnya */
    .profile-header-flat {
        display: flex;
        align-items: center;
        gap: 30px;
        padding-bottom: 30px;
        border-bottom: 2px solid var(--border-color);
    }

    .profile-img-flat {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid var(--primary-color);
    }

    .attendance-data {
        margin-top: 30px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .data-item {
        padding: 20px;
        background: #f8fafc;
        border: 1px solid var(--border-color);
        border-radius: 10px;
        text-align: center;
    }
    
    /* Responsive untuk layar kecil */
    @media (max-width: 768px) {
        .main-content {
            margin-left: 0;
            padding: 20px;
        }
        .profile-header-flat {
            flex-direction: column;
            text-align: center;
        }
    }
</style>

<body>
    @include('components.sidebar')

    <div class="main-content">
        <div class="profile-container">
            <div class="profile-header-flat">
                <img src="https://img.freepik.com/premium-vector/avatar-profile-icon-flat-style-female-user-profile-vector-illustration-isolated-background-women-profile-sign-business-concept_157943-38866.jpg?semt=ais_hybrid&w=740&q=80"
                    alt="Profile Picture" class="profile-img-flat">
                <div class="user-info">
                    <h2>{{ $user->name ?? 'Shafa' }}</h2>
                    <p>NIM: 2201010001 (Mahasiswa)</p>
                    <p><i class="fa-solid fa-envelope"></i> {{ $user->email ?? 'shafa@gmail.com' }}</p>
                    <a href="#" class="btn-edit-flat"><i class="fa-solid fa-user-gear"></i> Pengaturan Akun</a>
                </div>
            </div>

            <h3 style="margin-top: 40px; color: var(--text-dark);">Ringkasan Kehadiran Semester Ini</h3>
            <div class="attendance-data">
                <div class="data-item">
                    <i class="fa-solid fa-calendar-check"></i>
                    <div class="data-label">Hadir</div>
                    <div class="data-value">18</div>
                </div>
                <div class="data-item" style="border-left: 4px solid #eab308;">
                    <i class="fa-solid fa-clock"></i>
                    <div class="data-label">Izin</div>
                    <div class="data-value">2</div>
                </div>
                <div class="data-item" style="border-left: 4px solid #ef4444;">
                    <i class="fa-solid fa-circle-xmark"></i>
                    <div class="data-label">Alpa</div>
                    <div class="data-value">0</div>
                </div>
                <div class="data-item" style="border-left: 4px solid #10b981;">
                    <i class="fa-solid fa-percent"></i>
                    <div class="data-label">Persentase</div>
                    <div class="data-value">92%</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
