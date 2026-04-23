<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - UniAttend</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
                    <a href="#mahasiswa">
                        <i class="fas fa-user-graduate"></i>
                        <span>Data Mahasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="#dosen">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Data Dosen</span>
                    </a>
                </li>
                <li>
                    <a href="#matakuliah">
                        <i class="fas fa-book"></i>
                        <span>Mata Kuliah</span>
                    </a>
                </li>
                <li>
                    <a href="#jadwal">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Jadwal Kuliah</span>
                    </a>
                </li>
                <li>
                    <a href="#kehadiran">
                        <i class="fas fa-clipboard-check"></i>
                        <span>Rekap Kehadiran</span>
                    </a>
                </li>
                <li>
                    <a href="#laporan">
                        <i class="fas fa-chart-bar"></i>
                        <span>Laporan</span>
                    </a>
                </li>
                <li>
                    <a href="#settings">
                        <i class="fas fa-cog"></i>
                        <span>Pengaturan</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="sidebar-footer">
            <a href="login.html" class="logout-btn">
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
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Cari...">
            </div>
            <div class="header-right">
                <button class="notification-btn">
                    <i class="fas fa-bell"></i>
                    <span class="badge">5</span>
                </button>
                <div class="user-menu">
                    <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Admin&background=4f46e5&color=fff)" alt="Admin">
                    <div class="user-info">
                        <span class="user-name">Administrator</span>
                        <span class="user-role">Super Admin</span>
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <div class="page-title">
                <h1>Dashboard Admin</h1>
                <p>Selamat datang kembali, Administrator!</p>
            </div>

            <!-- Stats Cards -->
            <div class="stats-cards">
                <div class="stat-card">
                    <div class="stat-card-icon blue">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>5,234</h3>
                        <p>Total Mahasiswa</p>
                    </div>
                    <div class="stat-card-trend up">
                        <i class="fas fa-arrow-up"></i> 12%
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon green">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>187</h3>
                        <p>Total Dosen</p>
                    </div>
                    <div class="stat-card-trend up">
                        <i class="fas fa-arrow-up"></i> 5%
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon purple">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>342</h3>
                        <p>Mata Kuliah</p>
                    </div>
                    <div class="stat-card-trend neutral">
                        <i class="fas fa-minus"></i> 0%
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon orange">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>92.5%</h3>
                        <p>Kehadiran Hari Ini</p>
                    </div>
                    <div class="stat-card-trend up">
                        <i class="fas fa-arrow-up"></i> 3%
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="charts-row">
                <div class="chart-card">
                    <div class="chart-header">
                        <h3>Statistik Kehadiran Mingguan</h3>
                        <select class="chart-filter">
                            <option>Minggu Ini</option>
                            <option>Minggu Lalu</option>
                            <option>Bulan Ini</option>
                        </select>
                    </div>
                    <div class="chart-body">
                        <div class="bar-chart">
                            <div class="bar-item">
                                <div class="bar" style="height: 85%;">
                                    <span class="bar-value">85%</span>
                                </div>
                                <span class="bar-label">Sen</span>
                            </div>
                            <div class="bar-item">
                                <div class="bar" style="height: 92%;">
                                    <span class="bar-value">92%</span>
                                </div>
                                <span class="bar-label">Sel</span>
                            </div>
                            <div class="bar-item">
                                <div class="bar" style="height: 78%;">
                                    <span class="bar-value">78%</span>
                                </div>
                                <span class="bar-label">Rab</span>
                            </div>
                            <div class="bar-item">
                                <div class="bar" style="height: 95%;">
                                    <span class="bar-value">95%</span>
                                </div>
                                <span class="bar-label">Kam</span>
                            </div>
                            <div class="bar-item">
                                <div class="bar" style="height: 88%;">
                                    <span class="bar-value">88%</span>
                                </div>
                                <span class="bar-label">Jum</span>
                            </div>
                            <div class="bar-item">
                                <div class="bar" style="height: 45%;">
                                    <span class="bar-value">45%</span>
                                </div>
                                <span class="bar-label">Sab</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chart-card">
                    <div class="chart-header">
                        <h3>Status Kehadiran Hari Ini</h3>
                    </div>
                    <div class="chart-body">
                        <div class="donut-chart">
                            <div class="donut" style="--percentage: 75; --color: #10b981;">
                                <div class="donut-center">
                                    <span class="donut-value">4,521</span>
                                    <span class="donut-label">Hadir</span>
                                </div>
                            </div>
                        </div>
                        <div class="donut-legend">
                            <div class="legend-item">
                                <span class="legend-color" style="background: #10b981;"></span>
                                <span>Hadir (86%)</span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-color" style="background: #f59e0b;"></span>
                                <span>Izin (8%)</span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-color" style="background: #ef4444;"></span>
                                <span>Alpha (6%)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Tables Row -->
            <div class="tables-row">
                <!-- Recent Activity -->
                <div class="table-card">
                    <div class="table-header">
                        <h3>Aktivitas Terbaru</h3>
                        <a href="#" class="view-all">Lihat Semua</a>
                    </div>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon green">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="activity-info">
                                <p><strong>Ahmad Fauzi</strong> melakukan absensi</p>
                                <span>Pemrograman Web - 08:15</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon blue">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="activity-info">
                                <p><strong>3 Mahasiswa baru</strong> ditambahkan</p>
                                <span>Teknik Informatika - 08:00</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon orange">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="activity-info">
                                <p><strong>Siti Nurhaliza</strong> mengajukan izin</p>
                                <span>Basis Data - 07:45</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon purple">
                                <i class="fas fa-calendar-plus"></i>
                            </div>
                            <div class="activity-info">
                                <p><strong>Jadwal baru</strong> ditambahkan</p>
                                <span>Kecerdasan Buatan - 07:30</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon red">
                                <i class="fas fa-exclamation"></i>
                            </div>
                            <div class="activity-info">
                                <p><strong>5 Mahasiswa</strong> alpha berturut-turut</p>
                                <span>Perlu tindak lanjut - 07:00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Today's Classes -->
                <div class="table-card">
                    <div class="table-header">
                        <h3>Kelas Hari Ini</h3>
                        <a href="#" class="view-all">Lihat Jadwal</a>
                    </div>
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Dosen</th>
                                <th>Waktu</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pemrograman Web</td>
                                <td>Dr. Budi Santoso</td>
                                <td>08:00 - 10:30</td>
                                <td><span class="status-badge completed">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>Basis Data</td>
                                <td>Ir. Maya Putri</td>
                                <td>10:30 - 12:00</td>
                                <td><span class="status-badge ongoing">Berlangsung</span></td>
                            </tr>
                            <tr>
                                <td>Jaringan Komputer</td>
                                <td>Dr. Andi Wijaya</td>
                                <td>13:00 - 15:30</td>
                                <td><span class="status-badge upcoming">Akan Datang</span></td>
                            </tr>
                            <tr>
                                <td>Kecerdasan Buatan</td>
                                <td>Prof. Sari Dewi</td>
                                <td>15:30 - 17:00</td>
                                <td><span class="status-badge upcoming">Akan Datang</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Management Section -->
            <div class="management-section">
                <div class="section-header">
                    <h2>Manajemen Data</h2>
                    <div class="section-actions">
                        <button class="btn btn-primary" onclick="openModal('addModal')">
                            <i class="fas fa-plus"></i> Tambah Data
                        </button>
                        <button class="btn btn-outline">
                            <i class="fas fa-file-export"></i> Export
                        </button>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="data-tabs">
                    <button class="data-tab active" data-target="mahasiswa-data">Mahasiswa</button>
                    <button class="data-tab" data-target="dosen-data">Dosen</button>
                    <button class="data-tab" data-target="matakuliah-data">Mata Kuliah</button>
                </div>

                <!-- Mahasiswa Data -->
                <div id="mahasiswa-data" class="data-content active">
                    <div class="table-controls">
                        <div class="search-filter">
                            <input type="text" placeholder="Cari mahasiswa...">
                            <select>
                                <option>Semua Prodi</option>
                                <option>Teknik Informatika</option>
                                <option>Sistem Informasi</option>
                                <option>Teknik Elektro</option>
                            </select>
                        </div>
                    </div>
                    <table class="data-table full">
                        <thead>
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Program Studi</th>
                                <th>Semester</th>
                                <th>Kehadiran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>2021001001</td>
                                <td>
                                    <div class="user-cell">
                                        <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Ahmad+Fauzi&background=random)" alt="">
                                        <span>Ahmad Fauzi</span>
                                    </div>
                                </td>
                                <td>Teknik Informatika</td>
                                <td>5</td>
                                <td>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 95%;"></div>
                                        <span>95%</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon" title="Lihat"><i class="fas fa-eye"></i></button>
                                        <button class="btn-icon" title="Edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn-icon delete" title="Hapus"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>2021001002</td>
                                <td>
                                    <div class="user-cell">
                                        <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Siti+Nurhaliza&background=random)" alt="">
                                        <span>Siti Nurhaliza</span>
                                    </div>
                                </td>
                                <td>Sistem Informasi</td>
                                <td>5</td>
                                <td>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 88%;"></div>
                                        <span>88%</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon" title="Lihat"><i class="fas fa-eye"></i></button>
                                        <button class="btn-icon" title="Edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn-icon delete" title="Hapus"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>2021001003</td>
                                <td>
                                    <div class="user-cell">
                                        <img src="[ui-avatars.com](https://ui-avatars.com/api/?name=Budi+Pratama&background=random)" alt="">
                                        <span>Budi Pratama</span>
                                    </div>
                                </td>
                                <td>Teknik Informatika</td>
                                <td>3</td>
                                <td>
                                    <div class="progress-bar warning">
                                        <div class="progress" style="width: 72%;"></div>
                                        <span>72%</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon" title="Lihat"><i class="fas fa-eye"></i></button>
                                        <button class="btn-icon" title="Edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn-icon delete" title="Hapus"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="table-pagination">
                        <span>Menampilkan 1-10 dari 5,234 data</span>
                        <div class="pagination">
                            <button class="btn-icon"><i class="fas fa-chevron-left"></i></button>
                            <button class="page-num active">1</button>
                            <button class="page-num">2</button>
                            <button class="page-num">3</button>
                            <span>...</span>
                            <button class="page-num">524</button>
                            <button class="btn-icon"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Add Modal -->
    <div class="modal" id="addModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Tambah Mahasiswa Baru</h3>
                <button class="close-modal" onclick="closeModal('addModal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="addForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" placeholder="Masukkan NIM" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" placeholder="Masukkan nama" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" placeholder="Masukkan email" required>
                        </div>
                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="tel" placeholder="Masukkan nomor telepon">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Program Studi</label>
                            <select required>
                                <option value="">Pilih Program Studi</option>
                                <option>Teknik Informatika</option>
                                <option>Sistem Informasi</option>
                                <option>Teknik Elektro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Semester</label>
                            <select required>
                                <option value="">Pilih Semester</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline" onclick="closeModal('addModal')">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
