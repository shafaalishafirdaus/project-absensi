<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Kuliah</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

     <style>
        body {
            overflow-x: hidden;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: linear-gradient(180deg, #0d6efd, #0a58ca);
            color: white;
            position: fixed;
        }

        .sidebar-header {
            padding: 20px;
            font-size: 20px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-nav ul {
            list-style: none;
            padding: 0;
        }

        .sidebar-nav li {
            margin: 5px 0;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar-nav a:hover,
        .sidebar-nav .active a {
            background: rgba(255,255,255,0.2);
            border-radius: 8px;
        }

        .sidebar-footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            padding: 0 20px;
        }

        .logout-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            text-decoration: none;
        }

        /* CONTENT */
        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        .card {
            border: none;
            border-radius: 12px;
        }

        .card-body {
            padding: 30px;
        }

        #reader {
            border-radius: 12px;
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-light">

{{-- Sidebar --}}
@include('components.sidebar')

<div class="main-content">

    <h3 class="mb-4 fw-bold">
        <i class="fas fa-calendar-alt"></i> Jadwal Kuliah
    </h3>

    <div class="container-fluid">

        <div class="row g-4">

            <!-- Senin -->
            <div class="col-md-4">
                <div class="card shadow schedule-card">
                    <div class="card-header bg-primary text-white">
                        Senin
                    </div>
                    <div class="card-body">
                        <p><strong>08:00 - 10:30</strong><br>Pemrograman Web</p>
                        <p><strong>10:30 - 12:00</strong><br>Struktur Data</p>
                        <p><strong>13:00 - 15:30</strong><br>Basis Data</p>
                    </div>
                </div>
            </div>

            <!-- Selasa -->
            <div class="col-md-4">
                <div class="card shadow schedule-card">
                    <div class="card-header bg-success text-white">
                        Selasa
                    </div>
                    <div class="card-body">
                        <p><strong>08:00 - 10:30</strong><br>Jaringan Komputer</p>
                        <p><strong>13:00 - 15:00</strong><br>Kecerdasan Buatan</p>
                    </div>
                </div>
            </div>

            <!-- Rabu -->
            <div class="col-md-4">
                <div class="card shadow schedule-card">
                    <div class="card-header bg-warning text-dark">
                        Rabu
                    </div>
                    <div class="card-body">
                        <p><strong>08:00 - 10:30</strong><br>Pemrograman Web</p>
                        <p><strong>10:30 - 12:00</strong><br>Basis Data</p>
                    </div>
                </div>
            </div>

            <!-- Kamis -->
            <div class="col-md-4">
                <div class="card shadow schedule-card">
                    <div class="card-header bg-info text-white">
                        Kamis
                    </div>
                    <div class="card-body">
                        <p><strong>08:00 - 10:30</strong><br>Struktur Data</p>
                        <p><strong>13:00 - 15:30</strong><br>Jaringan Komputer</p>
                    </div>
                </div>
            </div>

            <!-- Jumat -->
            <div class="col-md-4">
                <div class="card shadow schedule-card">
                    <div class="card-header bg-danger text-white">
                        Jumat
                    </div>
                    <div class="card-body">
                        <p><strong>08:00 - 10:00</strong><br>Kecerdasan Buatan</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>