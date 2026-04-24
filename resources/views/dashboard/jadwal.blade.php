<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Kuliah</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            
            background: #f4f6fb;
            overflow-x: hidden;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        h3 {
            font-size: 22px;
            margin-bottom: 20px;
        }

        /* GRID */
        .schedule-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        /* CARD */
        .card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .card-header {
            padding: 12px 15px;
            font-weight: bold;
            color: white;
        }

        .card-body {
            padding: 15px;
        }

        .card-body p {
            margin: 10px 0;
            font-size: 14px;
        }

        /* HEADER COLORS */
        .bg-primary { background: #3b82f6; }
        .bg-success { background: #10b981; }
        .bg-warning { background: #f59e0b; color: black; }
        .bg-info { background: #06b6d4; }
        .bg-danger { background: #ef4444; }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .schedule-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .schedule-grid {
                grid-template-columns: 1fr;
            }

            .main-content {
                margin-left: 0;
                padding: 15px;
            }
        }
    </style>
</head>

<body>

@include('components.sidebar')

<div class="main-content">

    <h3>
        <i class="fas fa-calendar-alt"></i> Jadwal Kuliah
    </h3>

    <div class="schedule-grid">

        <!-- SENIN -->
        <div class="card">
            <div class="card-header bg-primary">Senin</div>
            <div class="card-body">
                <p><strong>08:00 - 10:30</strong><br>Pemrograman Web</p>
                <p><strong>10:30 - 12:00</strong><br>Struktur Data</p>
                <p><strong>13:00 - 15:30</strong><br>Basis Data</p>
            </div>
        </div>

        <!-- SELASA -->
        <div class="card">
            <div class="card-header bg-success">Selasa</div>
            <div class="card-body">
                <p><strong>08:00 - 10:30</strong><br>Jaringan Komputer</p>
                <p><strong>13:00 - 15:00</strong><br>Kecerdasan Buatan</p>
            </div>
        </div>

        <!-- RABU -->
        <div class="card">
            <div class="card-header bg-warning">Rabu</div>
            <div class="card-body">
                <p><strong>08:00 - 10:30</strong><br>Pemrograman Web</p>
                <p><strong>10:30 - 12:00</strong><br>Basis Data</p>
            </div>
        </div>

        <!-- KAMIS -->
        <div class="card">
            <div class="card-header bg-info">Kamis</div>
            <div class="card-body">
                <p><strong>08:00 - 10:30</strong><br>Struktur Data</p>
                <p><strong>13:00 - 15:30</strong><br>Jaringan Komputer</p>
            </div>
        </div>

        <!-- JUMAT -->
        <div class="card">
            <div class="card-header bg-danger">Jumat</div>
            <div class="card-body">
                <p><strong>08:00 - 10:00</strong><br>Kecerdasan Buatan</p>
            </div>
        </div>

    </div>

</div>

</body>
</html>