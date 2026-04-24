<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Kehadiran</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="../css/style.css">

    <style>
        body {
            margin: 0;
            background: #f4f6fb;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        /* TITLE */
        h3 {
            font-size: 22px;
            margin-bottom: 20px;
        }

        /* FILTER */
        .filter-form {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .form-control {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            min-width: 180px;
        }

        .btn {
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-primary {
            background: #3b82f6;
            color: white;
        }

        .btn-primary:hover {
            background: #2563eb;
        }

        /* CARD */
        .card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        /* TABLE */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .table th {
            background: #f8fafc;
        }

        .table tr:hover {
            background: #f1f5f9;
        }

        /* BADGE */
        .badge {
            padding: 5px 10px;
            border-radius: 8px;
            font-size: 12px;
            color: white;
        }

        .badge-hadir {
            background: #10b981;
        }

        .badge-izin {
            background: #f59e0b;
        }

        .badge-alpha {
            background: #ef4444;
        }

        /* CHART */
        .chart-box {
            max-width: 400px;
            margin: auto;
        }

        /* IMAGE */
        .bukti-img {
            width: 60px;
            border-radius: 8px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 15px;
            }

            .filter-form {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

@include('components.sidebar')

<div class="main-content">

    <h3>📊 Riwayat Kehadiran</h3>

    <!-- FILTER -->
    <form method="GET" class="filter-form">

        <select name="bulan" class="form-control">
            <option value="">Pilih Bulan</option>
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
        </select>

        <select name="minggu" class="form-control">
            <option value="">Semua</option>
            <option value="1">Minggu Ini</option>
        </select>

        <button class="btn btn-primary">Filter</button>

    </form>

    <!-- CHART -->
    <div class="card">
        <div class="chart-box">
            <canvas id="chart" height="200"></canvas>
        </div>
    </div>

    <!-- TABLE -->
    <div class="card">

        <table class="table">

            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Matkul</th>
                    <th>Dosen</th>
                    <th>Waktu</th>
                    <th>Status</th>
                    <th>Bukti</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->created_at->format('d M Y') }}</td>
                    <td>{{ $item->matkul }}</td>
                    <td>{{ $item->dosen }}</td>
                    <td>{{ $item->waktu }}</td>

                    <td>
                        <span class="badge 
                            {{ $item->status == 'hadir' ? 'badge-hadir' : '' }}
                            {{ $item->status == 'izin' ? 'badge-izin' : '' }}
                            {{ $item->status == 'alpha' ? 'badge-alpha' : '' }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>

                    <td>
                        @if($item->bukti)
                            <img src="{{ asset('storage/' . $item->bukti) }}" class="bukti-img">
                        @else
                            -
                        @endif
                    </td>

                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</div>

<!-- CHART SCRIPT -->
<script>
const canvas = document.getElementById('chart');

if (canvas) {
    const ctx = canvas.getContext('2d');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Hadir', 'Izin', 'Alpha'],
            datasets: [{
                data: @json(!empty($chart) ? array_values($chart) : [0,0,0]),
                backgroundColor: ['#10b981','#f59e0b','#ef4444']
            }]
        },
        options: {
            responsive: true
        }
    });
}
</script>

</body>
</html>