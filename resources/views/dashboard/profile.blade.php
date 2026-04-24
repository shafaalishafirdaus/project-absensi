<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa - UniAttend</title>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="dashboard-page">

    @include('components.sidebar')
    <!-- MAIN CONTENT -->
    <main class="main-content container-fluid">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Profil Mahasiswa</h2>

        <button class="btn btn-light position-relative">
            <i class="fas fa-bell"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                2
            </span>
        </button>
    </div>

    <!-- PROFILE CARD -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center flex-wrap">

            <div class="d-flex align-items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=Shafa+Alisha&background=4f46e5&color=fff"
                    class="rounded-circle" width="80">

                <div>
                    <h4 class="mb-1">Shafa Alisha Firdaus</h4>
                    <p class="mb-1 text-muted"><i class="fas fa-id-card"></i> 0101010101</p>
                    <p class="mb-1 text-muted"><i class="fas fa-envelope"></i> shafa@student.univ.ac.id</p>
                    <p class="mb-0 text-muted"><i class="fas fa-graduation-cap"></i> Teknik Informatika</p>
                </div>
            </div>

            <button class="btn btn-primary mt-3 mt-md-0">
                <i class="fas fa-edit"></i> Edit Profil
            </button>

        </div>
    </div>

    <!-- GRID -->
    <div class="row g-4">

        <!-- BIODATA -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header fw-bold">Biodata</div>
                <div class="card-body">

                    <p><strong>NIM:</strong> 0101010101</p>
                    <p><strong>Nama:</strong> Shafa Alisha Firdaus</p>
                    <p><strong>Jenis Kelamin:</strong> Perempuan</p>
                    <p><strong>Alamat:</strong> Bandung</p>

                </div>
            </div>
        </div>

        <!-- AKADEMIK -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header fw-bold">Informasi Akademik</div>
                <div class="card-body">

                    <p><strong>Prodi:</strong> Teknik Informatika</p>
                    <p><strong>Fakultas:</strong> Ilmu Komputer</p>
                    <p><strong>Semester:</strong> 5</p>
                    <span class="badge bg-success">Aktif</span>

                </div>
            </div>
        </div>

    </div>

    <!-- SUMMARY -->
    <div class="card shadow-sm mt-4">
        <div class="card-header fw-bold">Ringkasan Kehadiran</div>
        <div class="card-body">

            <div class="row text-center">

                <div class="col-md-3">
                    <div class="p-3 bg-success text-white rounded">
                        <h3>45</h3>
                        <p class="mb-0">Hadir</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 bg-warning text-white rounded">
                        <h3>3</h3>
                        <p class="mb-0">Izin</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 bg-danger text-white rounded">
                        <h3>1</h3>
                        <p class="mb-0">Alpha</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 bg-primary text-white rounded">
                        <h3>92%</h3>
                        <p class="mb-0">Persentase</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- ACTION -->
    <div class="d-flex justify-content-between mt-4">

        <a href="/mahasiswa" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>

        <button class="btn btn-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>

    </div>

</main>

</body>

</html>
