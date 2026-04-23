<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa - UniAttend</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="dashboard-page">
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
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
                    <a href="#absensi">
                        <i class="fas fa-qrcode"></i>
                        <span>Scan Absensi</span>
                    </a>
                </li>
                <li>
                    <a href="#jadwal">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Jadwal Kuliah</span>
                    </a>
                </li>
                <li>
                    <a href="#riwayat">
                        <i class="fas fa-history"></i>
                        <span>Riwayat Kehadiran</span>
                    </a>
                </li>
                <li>
                    <a href="#izin">
                        <i class="fas fa-file-alt"></i>
                        <span>Pengajuan Izin</span>
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
            <a href="/login" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>

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
                    <span class="badge">2</span>
                </button>
                <div class="user-menu">
                    <img src="https://ui-avatars.com/api/?name=Ahmad+Fauzi&background=f59e0b&color=fff" alt="Mahasiswa">
                    <div class="user-info">
                        <span class="user-name">Ahmad Fauzi</span>
                        <span class="user-role">2021001001</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <!-- Welcome Section -->
            <div class="welcome-section">
                <div class="welcome-text">
                    <h1>Halo, Ahmad! 👋</h1>
                    <p>Senin, 15 Januari 2024 • Semester 5</p>
                </div>
                <button class="btn btn-primary btn-lg" onclick="openModal('scanModal'); startQRScanner();">
                    <i class="fas fa-qrcode"></i> Scan Absensi
                </button>
            </div>

            <!-- Quick Stats -->
            <div class="stats-cards student-stats">
                <div class="stat-card gradient-blue">
                    <div class="stat-card-content">
                        <div class="stat-icon">
                            <i class="fas fa-percentage"></i>
                        </div>
                        <div class="stat-info">
                            <h3>92%</h3>
                            <p>Total Kehadiran</p>
                        </div>
                    </div>
                    <div class="stat-detail">
                        <span class="trend up"><i class="fas fa-arrow-up"></i> 3% dari bulan lalu</span>
                    </div>
                </div>
                <div class="stat-card gradient-green">
                    <div class="stat-card-content">
                        <div class="stat-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>45</h3>
                            <p>Kali Hadir</p>
                        </div>
                    </div>
                    <div class="stat-detail">
                        <span>dari 49 pertemuan</span>
                    </div>
                </div>
                <div class="stat-card gradient-orange">
                    <div class="stat-card-content">
                        <div class="stat-icon">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <div class="stat-info">
                            <h3>3</h3>
                            <p>Izin</p>
                        </div>
                    </div>
                    <div class="stat-detail">
                        <span>Semester ini</span>
                    </div>
                </div>
                <div class="stat-card gradient-red">
                    <div class="stat-card-content">
                        <div class="stat-icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>1</h3>
                            <p>Alpha</p>
                        </div>
                    </div>
                    <div class="stat-detail">
                        <span>Semester ini</span>
                    </div>
                </div>
            </div>

            <!-- Today's Classes -->
            <div class="today-section">
                <div class="section-header">
                    <h2><i class="fas fa-calendar-day"></i> Jadwal Hari Ini</h2>
                </div>
                <div class="today-classes">
                    <div class="class-card completed">
                        <div class="class-status-indicator"></div>
                        <div class="class-time">
                            <span class="time-start">08:00</span>
                            <span class="time-end">10:30</span>
                        </div>
                        <div class="class-details">
                            <h4>Pemrograman Web</h4>
                            <p><i class="fas fa-user"></i> Dr. Budi Santoso</p>
                            <p><i class="fas fa-map-marker-alt"></i> Ruang Lab 3</p>
                        </div>
                        <div class="class-attendance">
                            <span class="attendance-badge hadir">
                                <i class="fas fa-check"></i> Hadir
                            </span>
                            <small>08:05 WIB</small>
                        </div>
                    </div>
                    <div class="class-card ongoing">
                        <div class="class-status-indicator"></div>
                        <div class="class-time">
                            <span class="time-start">10:30</span>
                            <span class="time-end">12:00</span>
                        </div>
                        <div class="class-details">
                            <h4>Struktur Data</h4>
                            <p><i class="fas fa-user"></i> Dr. Budi Santoso</p>
                            <p><i class="fas fa-map-marker-alt"></i> Ruang 201</p>
                        </div>
                        <div class="class-attendance">
                            <button class="btn btn-primary btn-sm" onclick="openModal('scanModal'); startQRScanner();">
                                <i class="fas fa-qrcode"></i> Absen Sekarang
                            </button>
                        </div>
                    </div>
                    <div class="class-card upcoming">
                        <div class="class-status-indicator"></div>
                        <div class="class-time">
                            <span class="time-start">13:00</span>
                            <span class="time-end">15:30</span>
                        </div>
                        <div class="class-details">
                            <h4>Basis Data</h4>
                            <p><i class="fas fa-user"></i> Ir. Maya Putri</p>
                            <p><i class="fas fa-map-marker-alt"></i> Ruang 102</p>
                        </div>
                        <div class="class-attendance">
                            <span class="attendance-badge upcoming">
                                <i class="fas fa-clock"></i> 13:00
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Two Column Layout -->
            <div class="two-column-section">
                <!-- Attendance Per Subject -->
                <div class="card">
                    <div class="card-header">
                        <h3>Kehadiran Per Mata Kuliah</h3>
                    </div>
                    <div class="card-body">
                        <div class="subject-attendance-list">
                            <div class="subject-item">
                                <div class="subject-info">
                                    <div class="subject-icon">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div>
                                        <h4>Pemrograman Web</h4>
                                        <span>3 SKS • Dr. Budi Santoso</span>
                                    </div>
                                </div>
                                <div class="subject-progress">
                                    <div class="circular-progress" data-progress="95">
                                        <svg>
                                            <circle cx="30" cy="30" r="26"></circle>
                                            <circle cx="30" cy="30" r="26" style="--progress: 95;"></circle>
                                        </svg>
                                        <span>95%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="subject-item">
                                <div class="subject-info">
                                    <div class="subject-icon">
                                        <i class="fas fa-project-diagram"></i>
                                    </div>
                                    <div>
                                        <h4>Struktur Data</h4>
                                        <span>3 SKS • Dr. Budi Santoso</span>
                                    </div>
                                </div>
                                <div class="subject-progress">
                                    <div class="circular-progress" data-progress="90">
                                        <svg>
                                            <circle cx="30" cy="30" r="26"></circle>
                                            <circle cx="30" cy="30" r="26" style="--progress: 90;"></circle>
                                        </svg>
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="subject-item">
                                <div class="subject-info">
                                    <div class="subject-icon">
                                        <i class="fas fa-database"></i>
                                    </div>
                                    <div>
                                        <h4>Basis Data</h4>
                                        <span>3 SKS • Ir. Maya Putri</span>
                                    </div>
                                </div>
                                <div class="subject-progress">
                                    <div class="circular-progress" data-progress="88">
                                        <svg>
                                            <circle cx="30" cy="30" r="26"></circle>
                                            <circle cx="30" cy="30" r="26" style="--progress: 88;"></circle>
                                        </svg>
                                        <span>88%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="subject-item">
                                <div class="subject-info">
                                    <div class="subject-icon">
                                        <i class="fas fa-network-wired"></i>
                                    </div>
                                    <div>
                                        <h4>Jaringan Komputer</h4>
                                        <span>3 SKS • Dr. Andi Wijaya</span>
                                    </div>
                                </div>
                                <div class="subject-progress">
                                    <div class="circular-progress warning" data-progress="75">
                                        <svg>
                                            <circle cx="30" cy="30" r="26"></circle>
                                            <circle cx="30" cy="30" r="26" style="--progress: 75;"></circle>
                                        </svg>
                                        <span>75%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Attendance History -->
                <div class="card">
                    <div class="card-header">
                        <h3>Riwayat Kehadiran Terbaru</h3>
                        <a href="#" class="view-all">Lihat Semua</a>
                    </div>
                    <div class="card-body">
                        <div class="history-list">
                            <div class="history-item">
                                <div class="history-date">
                                    <span class="day">15</span>
                                    <span class="month">Jan</span>
                                </div>
                                <div class="history-info">
                                    <h4>Pemrograman Web</h4>
                                    <span>08:05 WIB • Ruang Lab 3</span>
                                </div>
                                <span class="history-status hadir">Hadir</span>
                            </div>
                            <div class="history-item">
                                <div class="history-date">
                                    <span class="day">14</span>
                                    <span class="month">Jan</span>
                                </div>
                                <div class="history-info">
                                    <h4>Jaringan Komputer</h4>
                                    <span>13:02 WIB • Ruang 305</span>
                                </div>
                                <span class="history-status hadir">Hadir</span>
                            </div>
                            <div class="history-item">
                                <div class="history-date">
                                    <span class="day">13</span>
                                    <span class="month">Jan</span>
                                </div>
                                <div class="history-info">
                                    <h4>Basis Data</h4>
                                    <span>Izin Sakit</span>
                                </div>
                                <span class="history-status izin">Izin</span>
                            </div>
                            <div class="history-item">
                                <div class="history-date">
                                    <span class="day">12</span>
                                    <span class="month">Jan</span>
                                </div>
                                <div class="history-info">
                                    <h4>Struktur Data</h4>
                                    <span>10:35 WIB • Ruang 201</span>
                                </div>
                                <span class="history-status hadir">Hadir</span>
                            </div>
                            <div class="history-item">
                                <div class="history-date">
                                    <span class="day">11</span>
                                    <span class="month">Jan</span>
                                </div>
                                <div class="history-info">
                                    <h4>Pemrograman Web</h4>
                                    <span>08:10 WIB • Ruang Lab 3</span>
                                </div>
                                <span class="history-status hadir">Hadir</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Weekly Schedule -->
            <div class="schedule-section full">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-calendar-week"></i> Jadwal Mingguan</h3>
                    </div>
                    <div class="card-body">
                        <div class="week-schedule">
                            <div class="day-column">
                                <div class="day-header">Senin</div>
                                <div class="day-classes">
                                    <div class="mini-class blue">
                                        <span class="mini-time">08:00-10:30</span>
                                        <span class="mini-name">Pemrograman Web</span>
                                    </div>
                                    <div class="mini-class green">
                                        <span class="mini-time">10:30-12:00</span>
                                        <span class="mini-name">Struktur Data</span>
                                    </div>
                                    <div class="mini-class purple">
                                        <span class="mini-time">13:00-15:30</span>
                                        <span class="mini-name">Basis Data</span>
                                    </div>
                                </div>
                            </div>
                            <div class="day-column">
                                <div class="day-header">Selasa</div>
                                <div class="day-classes">
                                    <div class="mini-class orange">
                                        <span class="mini-time">08:00-10:30</span>
                                        <span class="mini-name">Jaringan Komputer</span>
                                    </div>
                                    <div class="mini-class pink">
                                        <span class="mini-time">13:00-15:00</span>
                                        <span class="mini-name">Kecerdasan Buatan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="day-column">
                                <div class="day-header">Rabu</div>
                                <div class="day-classes">
                                    <div class="mini-class blue">
                                        <span class="mini-time">08:00-10:30</span>
                                        <span class="mini-name">Pemrograman Web</span>
                                    </div>
                                    <div class="mini-class purple">
                                        <span class="mini-time">10:30-12:00</span>
                                        <span class="mini-name">Basis Data</span>
                                    </div>
                                </div>
                            </div>
                            <div class="day-column">
                                <div class="day-header">Kamis</div>
                                <div class="day-classes">
                                    <div class="mini-class green">
                                        <span class="mini-time">08:00-10:30</span>
                                        <span class="mini-name">Struktur Data</span>
                                    </div>
                                    <div class="mini-class orange">
                                        <span class="mini-time">13:00-15:30</span>
                                        <span class="mini-name">Jaringan Komputer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="day-column">
                                <div class="day-header">Jumat</div>
                                <div class="day-classes">
                                    <div class="mini-class pink">
                                        <span class="mini-time">08:00-10:00</span>
                                        <span class="mini-name">Kecerdasan Buatan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scan Modal -->
    <div class="modal" id="scanModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Scan QR Code Absensi</h3>
                <button class="close-modal" onclick="closeModal('scanModal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="scan-container">
                    <div class="scanner-frame">
                        <div class="scanner-overlay">
                            <div class="scanner-line"></div>
                        </div>
                        <div class="camera-placeholder">
                            <i class="fas fa-camera"></i>
                            <p>Arahkan kamera ke QR Code</p>
                        </div>
                    </div>
                    <div class="scan-info">
                        <p><i class="fas fa-info-circle"></i> Pastikan QR Code terlihat jelas dalam bingkai</p>
                    </div>
                    <div class="scan-options">
                        <button class="btn btn-outline">
                            <i class="fas fa-image"></i> Upload Gambar
                        </button>
                        <button class="btn btn-outline">
                            <i class="fas fa-keyboard"></i> Input Manual
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
