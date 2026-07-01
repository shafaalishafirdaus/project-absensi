<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Jam Mata Kuliah</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        h3 {
            font-size: 22px;
            margin: 20px;
        }

        /* Layout Grid untuk Halaman Jadwal */
        .schedule-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        /* Card Kelas yang Sedang Berlangsung (Highlight) */
        .current-class {
            background: linear-gradient(135deg, #1e40af, #3b82f6);
            color: white;
            border: none;
        }

        .current-class .badge {
            background: rgba(255, 255, 255, 0.2);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 10px;
        }

        /* Styling Tabel Jam Kuliah */
        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            text-align: left;
        }

        .schedule-table th,
        .schedule-table td {
            padding: 14px;
            border-bottom: 1px solid #e2e8f0;
        }

        .schedule-table th {
            background-color: #f8fafc;
            color: #64748b;
            font-weight: 600;
            font-size: 14px;
        }

        .schedule-table td {
            color: #334155;
            font-size: 15px;
        }

        .time-badge {
            background: #e0f2fe;
            color: #0369a1;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 13px;
            display: inline-block;
        }

        .status-aktif {
            color: #16a34a;
            font-weight: bold;
        }

        .status-selesai {
            color: #94a3b8;
        }
    </style>
</head>

<body class="dashboard-page">

    @include('components.sidebar')

    <main class="main-content">
        <h3 class="fw-bold mb-4">
            <i class="fas fa-clock"></i> Jam Mata Kuliah
        </h3>

        <div class="schedule-container">

            <!-- 1. KELAS SEKARANG (HIGHLIGHT AKTIF) -->
            <div class="card current-class">
                <span class="badge"><i class="fas fa-circle-notch fa-spin"></i> Sedang Berlangsung</span>
                <h2 style="margin: 5px 0 10px 0; font-size: 24px;">Pemrograman Web Enterprise</h2>
                <p style="margin: 0; opacity: 0.9; font-size: 15px;">
                    <i class="far fa-clock"></i> 08:00 - 10:30 &nbsp;|&nbsp;
                    <i class="fas fa-door-open"></i> Lab Komputer 3 (Gedung B)
                </p>
            </div>

            <!-- 2. DAFTAR JAM MATA KULIAH HARI INI -->
            <div class="card">
                <h4 style="margin-top: 0; margin-bottom: 15px; color: #1e293b;">Jadwal Hari Ini</h4>

                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>Jam Kuliah</th>
                            <th>Mata Kuliah</th>
                            <th>Ruangan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Baris 1: Kelas yang sedang jalan -->
                        <tr>
                            <td><span class="time-badge">08:00 - 10:30</span></td>
                            <td><strong>Pemrograman Web Enterprise</strong></td>
                            <td>Lab Komputer 3</td>
                            <td><span class="status-aktif">Aktif</span></td>
                        </tr>
                        <!-- Baris 2 -->
                        <tr>
                            <td><span class="time-badge" style="background:#f1f5f9; color:#475569;">10:45 - 13:15</span>
                            </td>
                            <td>Basis Data Lanjut</td>
                            <td>Ruang Kuliah 402</td>
                            <td><span class="status-selesai">Menunggu</span></td>
                        </tr>
                        <!-- Baris 3 -->
                        <tr>
                            <td><span class="time-badge" style="background:#f1f5f9; color:#475569;">14:00 - 16:30</span>
                            </td>
                            <td>Kecerdasan Buatan (AI)</td>
                            <td>Lab Multimedia</td>
                            <td><span class="status-selesai">Menunggu</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</body>

</html>
