<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kalender Akademik</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        h3 {
            font-size: 22px;
            margin: 20px;
        }

        .academic-container {
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

        /* --- STYLING KALENDER GRID --- */
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .calendar-header h4 {
            margin: 0;
            color: #1e293b;
            font-size: 18px;
        }

        .calendar-nav .btn-nav {
            background: #f1f5f9;
            border: none;
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
            color: #475569;
        }

        .calendar-nav .btn-nav:hover {
            background: #e2e8f0;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 8px;
            text-align: center;
        }

        .day-name {
            font-weight: 600;
            color: #64748b;
            font-size: 13px;
            padding-bottom: 8px;
        }

        .day-number {
            padding: 12px 0;
            border-radius: 8px;
            font-size: 14px;
            color: #334155;
            background: #f8fafc;
            position: relative;
        }

        /* Penanda Event di Kalender */
        .day-number.event-blue {
            background: #e0f2fe;
            color: #0369a1;
            font-weight: bold;
        }

        .day-number.event-red {
            background: #fee2e2;
            color: #b91c1c;
            font-weight: bold;
        }

        .day-number.event-amber {
            background: #fef3c7;
            color: #b45309;
            font-weight: bold;
        }

        .day-number.muted {
            color: #cbd5e1;
            background: transparent;
        }

        /* --- STYLING DAFTAR AGENDA --- */
        .agenda-list {
            margin-top: 15px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .agenda-item {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 8px;
            background: #f8fafc;
            border-left: 4px solid #cbd5e1;
        }

        .agenda-item.blue {
            border-left-color: #3b82f6;
        }

        .agenda-item.red {
            border-left-color: #ef4444;
        }

        .agenda-item.amber {
            border-left-color: #f59e0b;
        }

        .agenda-date {
            font-weight: 600;
            font-size: 13px;
            min-width: 110px;
            color: #475569;
        }

        .agenda-title {
            font-size: 14px;
            color: #1e293b;
            font-weight: 500;
        }
    </style>
</head>

<body class="dashboard-page">

    @include('components.sidebar')

    <main class="main-content">
        <h3 class="fw-bold mb-4">
            <i class="fas fa-calendar"></i> Kalender Akademik
        </h3>

        <div class="academic-container">

            <!-- 1. VISUAL KALENDER BULANAN -->
            <div class="card">
                <div class="calendar-header">
                    <h4>Juli 2026</h4>
                    <div class="calendar-nav">
                        <button class="btn-nav"><i class="fas fa-chevron-left"></i></button>
                        <button class="btn-nav"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>

                <div class="calendar-grid">
                    <!-- Nama Hari -->
                    <div class="day-name">Min</div>
                    <div class="day-name">Sen</div>
                    <div class="day-name">Sel</div>
                    <div class="day-name">Rab</div>
                    <div class="day-name">Kam</div>
                    <div class="day-name">Jum</div>
                    <div class="day-name">Sab</div>

                    <!-- Baris Tanggal (Contoh Simulasi Bulan Juli) -->
                    <div class="day-number muted">28</div>
                    <div class="day-number muted">29</div>
                    <div class="day-number muted">30</div>
                    <div class="day-number">1</div>
                    <div class="day-number">2</div>
                    <div class="day-number">3</div>
                    <div class="day-number">4</div>

                    <div class="day-number">5</div>
                    <!-- Contoh Tanggal Ber-event -->
                    <div class="day-number event-blue">6</div>
                    <div class="day-number event-blue">7</div>
                    <div class="day-number event-blue">8</div>
                    <div class="day-number">9</div>
                    <div class="day-number">10</div>
                    <div class="day-number">11</div>

                    <div class="day-number">12</div>
                    <div class="day-number">13</div>
                    <div class="day-number">14</div>
                    <div class="day-number">15</div>
                    <div class="day-number event-amber">16</div>
                    <div class="day-number">17</div>
                    <div class="day-number">18</div>

                    <div class="day-number">19</div>
                    <div class="day-number event-red">20</div>
                    <div class="day-number event-red">21</div>
                    <div class="day-number">22</div>
                    <div class="day-number">23</div>
                    <div class="day-number">24</div>
                    <div class="day-number">25</div>

                    <div class="day-number">26</div>
                    <div class="day-number">27</div>
                    <div class="day-number">28</div>
                    <div class="day-number">29</div>
                    <div class="day-number">30</div>
                    <div class="day-number">31</div>
                    <div class="day-number muted">1</div>
                </div>
            </div>

            <!-- 2. DAFTAR DETAIL AGENDA AKADEMIK -->
            <div class="card">
                <h4 style="margin-top: 0; margin-bottom: 15px; color: #1e293b;">Daftar Agenda Penting</h4>

                <div class="agenda-list">
                    <!-- Agenda 1 -->
                    <div class="agenda-item blue">
                        <div class="agenda-date"><i class="far fa-calendar-alt"></i> 06 - 08 Juli</div>
                        <div class="agenda-title">Periode Herregistrasi Pembayaran UKT</div>
                    </div>

                    <!-- Agenda 2 -->
                    <div class="agenda-item amber">
                        <div class="agenda-date"><i class="far fa-calendar-alt"></i> 16 Juli</div>
                        <div class="agenda-title">Batas Akhir Pengisian KRS Online</div>
                    </div>

                    <!-- Agenda 3 -->
                    <div class="agenda-item red">
                        <div class="agenda-date"><i class="far fa-calendar-alt"></i> 20 - 21 Juli</div>
                        <div class="agenda-title">Libur Nasional / Cuti Bersama</div>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
