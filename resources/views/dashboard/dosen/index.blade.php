<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dosen - UniAttend</title>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="dashboard-page">
    <!-- Sidebar -->
    @include('components.sidebar')
    {{-- <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <i class="fas fa-university"></i>
            <span>UniAttend</span>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li class="active">
                    <a href="#dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#kelas">
                        <i class="fas fa-chalkboard"></i>
                        <span>Kelas Saya</span>
                    </a>
                </li>
                <li>
                    <a href="#absensi">
                        <i class="fas fa-clipboard-check"></i>
                        <span>Absensi</span>
                    </a>
                </li>
                <li>
                    <a href="#jadwal">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Jadwal</span>
                    </a>
                </li>
                <li>
                    <a href="#rekap">
                        <i class="fas fa-chart-bar"></i>
                        <span>Rekap Kehadiran</span>
                    </a>
                </li>
                <li>
                    <a href="#izin">
                        <i class="fas fa-file-alt"></i>
                        <span>Pengajuan Izin</span>
                        <span class="nav-badge">3</span>
                    </a>
                </li>
                <li>
                    <a href="#profil">
                        <i class="fas fa-user"></i>
                        <span>Profil</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="sidebar-footer">
            <a href="/login.html" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside> --}}

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="dashboard-header">
            <button class="sidebar-toggle" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
            <div class="header-right">
                <button class="notification-btn">
                    <i class="fas fa-bell"></i>
                    <span class="badge">3</span>
                </button>
                <div class="user-menu">
                    <img src="https://ui-avatars.com/api/?name=Dr+Budi&background=10b981&color=fff" alt="Dosen">
                    <div class="user-info">
                        <span class="user-name">Dr. Budi Santoso</span>
                        <span class="user-role">Dosen</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <div class="page-title">
                <h1>Dashboard Dosen</h1>
                <p>Senin, 15 Januari 2024</p>
            </div>

            <!-- Quick Stats -->
            <div class="stats-cards four-cols">
                <div class="stat-card">
                    <div class="stat-card-icon blue">
                        <i class="fas fa-chalkboard"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>5</h3>
                        <p>Kelas Diampu</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon green">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>156</h3>
                        <p>Total Mahasiswa</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon purple">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>3</h3>
                        <p>Kelas Hari Ini</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon orange">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>3</h3>
                        <p>Pengajuan Izin</p>
                    </div>
                </div>
            </div>

            <!-- Today's Schedule -->
            <div class="schedule-section">
                <div class="section-header">
                    <h2>Jadwal Hari Ini</h2>
                </div>
                <div class="schedule-cards">
                    <div class="schedule-card completed">
                        <div class="schedule-time">
                            <span class="time">08:00</span>
                            <span class="duration">2.5 jam</span>
                        </div>
                        <div class="schedule-info">
                            <h4>Pemrograman Web</h4>
                            <p><i class="fas fa-map-marker-alt"></i> Ruang Lab 3</p>
                            <p><i class="fas fa-users"></i> 35 Mahasiswa</p>
                        </div>
                        <div class="schedule-status">
                            <span class="status-badge completed">Selesai</span>
                            <p>32/35 Hadir</p>
                        </div>
                    </div>
                    <div class="schedule-card ongoing">
                        <div class="schedule-time">
                            <span class="time">10:30</span>
                            <span class="duration">1.5 jam</span>
                        </div>
                        <div class="schedule-info">
                            <h4>Struktur Data</h4>
                            <p><i class="fas fa-map-marker-alt"></i> Ruang 201</p>
                            <p><i class="fas fa-users"></i> 42 Mahasiswa</p>
                        </div>
                        <div class="schedule-status">
                            <span class="status-badge ongoing">Berlangsung</span>
                            <button class="btn btn-primary btn-sm" onclick="openModal('absensiModal')">
                                <i class="fas fa-qrcode"></i> Buka Absensi
                            </button>
                        </div>
                    </div>
                    <div class="schedule-card upcoming">
                        <div class="schedule-time">
                            <span class="time">13:00</span>
                            <span class="duration">2 jam</span>
                        </div>
                        <div class="schedule-info">
                            <h4>Algoritma Lanjutan</h4>
                            <p><i class="fas fa-map-marker-alt"></i> Ruang 305</p>
                            <p><i class="fas fa-users"></i> 38 Mahasiswa</p>
                        </div>
                        <div class="schedule-status">
                            <span class="status-badge upcoming">Akan Datang</span>
                            <p>Mulai dalam 2 jam</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Two Column Section -->
            <div class="two-column-section">
                <!-- Attendance Overview -->
                <div class="card">
                    <div class="card-header">
                        <h3>Rekap Kehadiran Per Kelas</h3>
                    </div>
                    <div class="card-body">
                        <div class="class-attendance-list">
                            <div class="class-item">
                                <div class="class-info">
                                    <h4>Pemrograman Web</h4>
                                    <span>IF-A / Semester 5</span>
                                </div>
                                <div class="class-progress">
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 92%;"></div>
                                    </div>
                                    <span>92%</span>
                                </div>
                            </div>
                            <div class="class-item">
                                <div class="class-info">
                                    <h4>Struktur Data</h4>
                                    <span>IF-B / Semester 3</span>
                                </div>
                                <div class="class-progress">
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 88%;"></div>
                                    </div>
                                    <span>88%</span>
                                </div>
                            </div>
                            <div class="class-item">
                                <div class="class-info">
                                    <h4>Algoritma Lanjutan</h4>
                                    <span>IF-A / Semester 5</span>
                                </div>
                                <div class="class-progress">
                                    <div class="progress-bar warning">
                                        <div class="progress" style="width: 76%;"></div>
                                    </div>
                                    <span>76%</span>
                                </div>
                            </div>
                            <div class="class-item">
                                <div class="class-info">
                                    <h4>Basis Data</h4>
                                    <span>SI-A / Semester 3</span>
                                </div>
                                <div class="class-progress">
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 95%;"></div>
                                    </div>
                                    <span>95%</span>
                                </div>
                            </div>
                            <div class="class-item">
                                <div class="class-info">
                                    <h4>Pemrograman Mobile</h4>
                                    <span>IF-C / Semester 7</span>
                                </div>
                                <div class="class-progress">
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 90%;"></div>
                                    </div>
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Approvals -->
                <div class="card">
                    <div class="card-header">
                        <h3>Pengajuan Izin Menunggu</h3>
                        <a href="#" class="view-all">Lihat Semua</a>
                    </div>
                    <div class="card-body">
                        <div class="approval-list">
                            <div class="approval-item">
                                <div class="approval-avatar">
                                    <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Rina+Sari&background=random)" alt="">
                                </div>
                                <div class="approval-info">
                                    <h4>Rina Sari</h4>
                                    <p>Izin Sakit - Pemrograman Web</p>
                                    <span>15 Jan 2024</span>
                                </div>
                                <div class="approval-actions">
                                    <button class="btn-icon approve" title="Setujui">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="btn-icon reject" title="Tolak">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="approval-item">
                                <div class="approval-avatar">
                                    <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Deni+Pratama&background=random)" alt="">
                                </div>
                                <div class="approval-info">
                                    <h4>Deni Pratama</h4>
                                    <p>Izin Keperluan Keluarga - Struktur Data</p>
                                    <span>15 Jan 2024</span>
                                </div>
                                <div class="approval-actions">
                                    <button class="btn-icon approve" title="Setujui">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="btn-icon reject" title="Tolak">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="approval-item">
                                <div class="approval-avatar">
                                    <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Maya+Putri&background=random)" alt="">
                                </div>
                                <div class="approval-info">
                                    <h4>Maya Putri</h4>
                                    <p>Izin Kegiatan Kampus - Algoritma</p>
                                    <span>14 Jan 2024</span>
                                </div>
                                <div class="approval-actions">
                                    <button class="btn-icon approve" title="Setujui">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="btn-icon reject" title="Tolak">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Student Alert Section -->
            <div class="alert-section">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-exclamation-triangle"></i> Mahasiswa Perlu Perhatian</h3>
                    </div>
                    <div class="card-body">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Mahasiswa</th>
                                    <th>Mata Kuliah</th>
                                    <th>Kehadiran</th>
                                    <th>Alpha Berturut</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="user-cell">
                                            <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Andi+Rahman&background=random)" alt="">
                                            <div>
                                                <span>Andi Rahman</span>
                                                <small>2021001005</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Pemrograman Web</td>
                                    <td>
                                        <span class="status-badge danger">65%</span>
                                    </td>
                                    <td>3 kali</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline">Hubungi</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-cell">
                                            <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Lisa+Permata&background=random)" alt="">
                                            <div>
                                                <span>Lisa Permata</span>
                                                <small>2021001012</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Struktur Data</td>
                                    <td>
                                        <span class="status-badge warning">72%</span>
                                    </td>
                                    <td>2 kali</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline">Hubungi</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Absensi Modal -->
    <div class="modal" id="absensiModal">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h3>Absensi Kelas - Struktur Data</h3>
                <button class="close-modal" onclick="closeModal('absensiModal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="absensi-container">
                    <div class="qr-section">
                        <div class="qr-code">
                            <div class="qr-placeholder">
                                <i class="fas fa-qrcode"></i>
                                <p>QR Code Absensi</p>
                            </div>
                        </div>
                        <p class="qr-info">Mahasiswa dapat scan QR code ini untuk absensi</p>
                        <div class="qr-timer">
                            <i class="fas fa-clock"></i>
                            <span>Berlaku: 15:00</span>
                        </div>
                        <button class="btn btn-outline btn-sm">
                            <i class="fas fa-sync"></i> Refresh QR
                        </button>
                    </div>
                    <div class="attendance-list-section">
                        <h4>Daftar Kehadiran (28/42)</h4>
                        <div class="attendance-filter">
                            <button class="filter-btn active">Semua</button>
                            <button class="filter-btn">Hadir</button>
                            <button class="filter-btn">Belum</button>
                        </div>
                        <div class="attendance-scroll-list">
                            <div class="attendance-row hadir">
                                <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Ahmad+F&background=random)" alt="">
                                <div class="student-info">
                                    <span>Ahmad Fauzi</span>
                                    <small>2021001001</small>
                                </div>
                                <span class="attendance-status hadir">
                                    <i class="fas fa-check-circle"></i> 10:32
                                </span>
                            </div>
                            <div class="attendance-row hadir">
                                <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Siti+N&background=random)" alt="">
                                <div class="student-info">
                                    <span>Siti Nurhaliza</span>
                                    <small>2021001002</small>
                                </div>
                                <span class="attendance-status hadir">
                                    <i class="fas fa-check-circle"></i> 10:33
                                </span>
                            </div>
                            <div class="attendance-row belum">
                                <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Budi+P&background=random)" alt="">
                                <div class="student-info">
                                    <span>Budi Pratama</span>
                                    <small>2021001003</small>
                                </div>
                                <span class="attendance-status belum">
                                    <i class="fas fa-clock"></i> Menunggu
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline" onclick="closeModal('absensiModal')">Tutup</button>
                <button class="btn btn-primary">Akhiri Absensi</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
