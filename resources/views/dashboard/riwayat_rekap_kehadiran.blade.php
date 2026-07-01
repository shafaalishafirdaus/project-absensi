<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Riwayat & Rekap Kehadiran</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        h3 {
            font-size: 22px;
            margin: 20px;
        }

        .attendance-container {
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

        /* --- STYLING STATS CARDS (REKAP) --- */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .stat-card {
            background: #f8fafc;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            border-top: 4px solid #cbd5e1;
        }

        .stat-card.hadir {
            border-top-color: #22c55e;
            background: #f0fdf4;
        }

        .stat-card.izin {
            border-top-color: #f59e0b;
            background: #fffbeb;
        }

        .stat-card.sakit {
            border-top-color: #ef4444;
            background: #fef2f2;
        }

        .stat-card.alpa {
            border-top-color: #64748b;
            background: #f8fafc;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            margin-top: 5px;
        }

        .stat-label {
            font-size: 13px;
            color: #64748b;
            font-weight: 500;
        }

        /* --- STYLING TABEL RIWAYAT --- */
        .history-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            text-align: left;
        }

        .history-table th,
        .history-table td {
            padding: 14px;
            border-bottom: 1px solid #e2e8f0;
        }

        .history-table th {
            background-color: #f8fafc;
            color: #64748b;
            font-weight: 600;
            font-size: 14px;
        }

        .history-table td {
            color: #334155;
            font-size: 14px;
        }

        /* Badge Status */
        .badge-status {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
        }

        .badge-hadir {
            background: #dcfce7;
            color: #15803d;
        }

        .badge-izin {
            background: #fef3c7;
            color: #b45309;
        }

        .badge-sakit {
            background: #fee2e2;
            color: #b91c1c;
        }
    </style>
</head>

<body class="dashboard-page">

    @include('components.sidebar')

    <main class="main-content">
        <h3 class="fw-bold mb-4">
            <i class="fas fa-history"></i> Riwayat & Rekap Kehadiran
        </h3>

        <div class="attendance-container">

            <!-- 1. KOTAK REKAP STATISTIK -->
            <div class="stats-grid">
                <div class="stat-card hadir">
                    <div class="stat-label"><i class="fas fa-check-circle"></i> Hadir</div>
                    <div class="stat-value">18</div>
                </div>
                <div class="stat-card izin">
                    <div class="stat-label"><i class="fas fa-envelope"></i> Izin</div>
                    <div class="stat-value">2</div>
                </div>
                <div class="stat-card sakit">
                    <div class="stat-label"><i class="fas fa-heart-pulse"></i> Sakit</div>
                    <div class="stat-value">1</div>
                </div>
                <div class="stat-card alpa">
                    <div class="stat-label"><i class="fas fa-times-circle"></i> Alpa</div>
                    <div class="stat-value">0</div>
                </div>
            </div>

            <!-- 2. TABEL LOG RIWAYAT KEHADIRAN -->
            <div class="card">
                <h4 style="margin-top: 0; margin-bottom: 15px; color: #1e293b;">Log Kehadiran Smester Ini</h4>

                <table class="history-table">
                    <thead>
                        <tr>
                            <th>Tanggal & Jam</th>
                            <th>Mata Kuliah</th>
                            <th>Ruangan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Baris 1 -->
                        <tr>
                            <td><strong>01 Juli 2026</strong> <span style="color:#64748b; font-size:12px;">•
                                    08:02</span></td>
                            <td>Pemrograman Web Enterprise</td>
                            <td>Lab Komputer 3</td>
                            <td><span class="badge-status badge-hadir">Tepat Waktu</span></td>
                        </tr>
                        <!-- Baris 2 -->
                        <tr>
                            <td><strong>24 Juni 2026</strong> <span style="color:#64748b; font-size:12px;">•
                                    10:50</span></td>
                            <td>Basis Data Lanjut</td>
                            <td>Ruang Kuliah 402</td>
                            <td><span class="badge-status badge-hadir">Hadir</span></td>
                        </tr>
                        <!-- Baris 3 -->
                        <tr>
                            <td><strong>17 Juni 2026</strong> <span style="color:#64748b; font-size:12px;">•
                                    --:--</span></td>
                            <td>Kecerdasan Buatan (AI)</td>
                            <td>Lab Multimedia</td>
                            <td><span class="badge-status badge-izin">Izin (Acara Keluarga)</span></td>
                        </tr>
                        <!-- Baris 4 -->
                        <tr>
                            <td><strong>10 Juni 2026</strong> <span style="color:#64748b; font-size:12px;">•
                                    08:15</span></td>
                            <td>Pemrograman Web Enterprise</td>
                            <td>Lab Komputer 3</td>
                            <td><span class="badge-status badge-sakit">Sakit (Surat Dokter)</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</body>

</html>
