<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa - UniAttend</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="dashboard-page">

    @include('components.sidebar')
    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- HEADER -->
        <header class="dashboard-header">
            <h2>Profil Mahasiswa</h2>

            <div class="header-right">
                <button class="notification-btn">
                    <i class="fas fa-bell"></i>
                    <span class="badge">2</span>
                </button>
            </div>
        </header>

        <!-- CONTENT -->
        <div class="dashboard-content">

            <!-- PROFILE CARD -->
            <div class="profile-card">

                <div class="profile-header">
                    <div class="profile-avatar">
                        <img src="https://ui-avatars.com/api/?name=Shafa+Alisha&background=4f46e5&color=fff"
                            alt="Profile">
                    </div>

                    <div class="profile-info">
                        <h2>Shafa Alisha Firdaus</h2>
                        <p><i class="fas fa-id-card"></i> 0101010101</p>
                        <p><i class="fas fa-envelope"></i> shafa@student.univ.ac.id</p>
                        <p><i class="fas fa-graduation-cap"></i> Teknik Informatika - Semester 5</p>
                    </div>

                    <button class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit Profil
                    </button>
                </div>

            </div>

            <!-- GRID INFO -->
            <div class="profile-grid">

                <!-- BIODATA -->
                <div class="card">
                    <div class="card-header">
                        <h3>Biodata</h3>
                    </div>

                    <div class="card-body">
                        <div class="info-item">
                            <span>NIM</span>
                            <strong>0101010101</strong>
                        </div>

                        <div class="info-item">
                            <span>Nama Lengkap</span>
                            <strong>Shafa Alisha Firdaus</strong>
                        </div>

                        <div class="info-item">
                            <span>Jenis Kelamin</span>
                            <strong>Perempuan</strong>
                        </div>

                        <div class="info-item">
                            <span>Alamat</span>
                            <strong>Bandung, Jawa Barat</strong>
                        </div>
                    </div>
                </div>

                <!-- ACADEMIC INFO -->
                <div class="card">
                    <div class="card-header">
                        <h3>Informasi Akademik</h3>
                    </div>

                    <div class="card-body">
                        <div class="info-item">
                            <span>Program Studi</span>
                            <strong>Teknik Informatika</strong>
                        </div>

                        <div class="info-item">
                            <span>Fakultas</span>
                            <strong>Ilmu Komputer</strong>
                        </div>

                        <div class="info-item">
                            <span>Semester</span>
                            <strong>5</strong>
                        </div>

                        <div class="info-item">
                            <span>Status</span>
                            <span class="status-badge active">Aktif</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ATTENDANCE SUMMARY -->
            <div class="card full">
                <div class="card-header">
                    <h3>Ringkasan Kehadiran</h3>
                </div>

                <div class="card-body">

                    <div class="attendance-summary">

                        <div class="summary-box green">
                            <h2>45</h2>
                            <p>Hadir</p>
                        </div>

                        <div class="summary-box orange">
                            <h2>3</h2>
                            <p>Izin</p>
                        </div>

                        <div class="summary-box red">
                            <h2>1</h2>
                            <p>Alpha</p>
                        </div>

                        <div class="summary-box blue">
                            <h2>92%</h2>
                            <p>Persentase</p>
                        </div>

                    </div>

                </div>
            </div>

            <!-- ACTION -->
            <div class="profile-actions">

                <a href="/mahasiswa" class="btn btn-outline">
                    <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
                </a>

                <button class="btn btn-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>

            </div>

        </div>

    </main>

</body>

</html>
