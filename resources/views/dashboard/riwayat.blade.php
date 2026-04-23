<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Kehadiran</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (biar icon jalan) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

@include('components.sidebar')

<div class="main-content">

    <h3 class="mb-4 fw-bold">📊 Riwayat Kehadiran</h3>

    <!-- FILTER -->
    <form method="GET" class="row mb-4">
        <div class="col-md-3">
            <select name="bulan" class="form-control">
                <option value="">Pilih Bulan</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
            </select>
        </div>

        <div class="col-md-3">
            <select name="minggu" class="form-control">
                <option value="">Semua</option>
                <option value="1">Minggu Ini</option>
            </select>
        </div>

        <div class="col-md-2">
            <button class="btn btn-primary">Filter</button>
        </div>
    </form>

    <!-- CHART -->
    <div class="card mb-4">
        <div class="card-body">
            <div style="max-width: 400px; margin: auto;">
    <canvas id="chart" height="200"></canvas>
    </div>
        </div>
    </div>

    <!-- TABLE -->
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">

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
        <img src="{{ asset('storage/' . $item->bukti) }}" width="60" style="border-radius:8px;">
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

</div>

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
            backgroundColor: [
                '#10b981',
                '#f59e0b',
                '#ef4444'
            ]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true
    }
});
}
</script>
</body>
</html>