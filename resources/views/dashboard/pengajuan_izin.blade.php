<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengajuan Izin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
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

@include('components.sidebar')

<div class="main-content">

    <h3 class="fw-bold mb-4">
        <i class="fas fa-file-signature"></i> Pengajuan Izin
    </h3>

    <div class="card form-card">
        <div class="card-body">

            <form action="{{ route('izin.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Mata Kuliah</label>
                    <input type="text" name="matkul" class="form-control" placeholder="Contoh: Pemrograman Web" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Dosen</label>
                    <input type="text" name="dosen" class="form-control" placeholder="Nama dosen" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Izin</label>
                    <select name="jenis" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="sakit">Sakit</option>
                        <option value="izin">Izin</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alasan</label>
                    <textarea name="alasan" class="form-control" rows="4" placeholder="Tuliskan alasan..." required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i> Kirim Pengajuan
                </button>

            </form>

        </div>
    </div>

</div>

</body>
</html>