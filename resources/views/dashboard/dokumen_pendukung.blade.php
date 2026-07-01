<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Dokumen Pendukung</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        h3 {
            font-size: 22px;
            margin: 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        /* --- STYLING LIST OUTPUT DATA --- */
        .output-container {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .output-row {
            display: grid;
            grid-template-columns: 200px 1fr;
            padding: 12px 0;
            border-bottom: 1px solid #f1f5f9;
            align-items: center;
        }

        .output-row:last-child {
            border-bottom: none;
        }

        .output-label {
            font-weight: 600;
            color: #64748b;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .output-value {
            font-size: 15px;
            color: #1e293b;
            font-weight: 500;
        }

        /* Badge untuk Jenis Izin */
        .badge-status {
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            background: #fef3c7;
            color: #d97706;
            display: inline-block;
        }

        /* Komponen File Dokumen Pendukung */
        .document-box {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 10px 16px;
            border-radius: 8px;
            margin-top: 5px;
        }

        .btn-view-doc {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            margin-left: 15px;
        }

        .btn-view-doc:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="dashboard-page">

    @include('components.sidebar')

    <main class="main-content">
        <h3 class="fw-bold mb-4">
            <i class="fas fa-paperclip"></i> Dokumen Pendukung
        </h3>

        <div class="card">
            <div class="output-container">

                <!-- 1. Mata Kuliah -->
                <div class="output-row">
                    <div class="output-label">
                        <i class="fas fa-book fa-fw"></i> Mata Kuliah
                    </div>
                    <div class="output-value">
                        Pemrograman Web Enterprise
                    </div>
                </div>

                <!-- 2. Dosen -->
                <div class="output-row">
                    <div class="output-label">
                        <i class="fas fa-user-tie fa-fw"></i> Dosen
                    </div>
                    <div class="output-value">
                        Dr. Ir. Hermawan, M.T.
                    </div>
                </div>

                <!-- 3. Tanggal -->
                <div class="output-row">
                    <div class="output-label">
                        <i class="far fa-calendar-alt fa-fw"></i> Tanggal
                    </div>
                    <div class="output-value">
                        01 Juli 2026
                    </div>
                </div>

                <!-- 4. Jenis Izin -->
                <div class="output-row">
                    <div class="output-label">
                        <i class="fas fa-info-circle fa-fw"></i> Jenis Izin
                    </div>
                    <div class="output-value">
                        <span class="badge-status">Izin Keluar Kampus</span>
                    </div>
                </div>

                <!-- 5. Alasan -->
                <div class="output-row" style="align-items: flex-start;">
                    <div class="output-label" style="padding-top: 4px;">
                        <i class="fas fa-comment-alt fa-fw"></i> Alasan
                    </div>
                    <div class="output-value" style="line-height: 1.6;">
                        Menghadiri kegiatan delegasi kompetisi nasional mewakili universitas.
                    </div>
                </div>

                <!-- 6. Dokumen Pendukung -->
                <div class="output-row" style="align-items: flex-start;">
                    <div class="output-label" style="padding-top: 12px;">
                        <i class="fas fa-paperclip fa-fw"></i> Dokumen Pendukung
                    </div>
                    <div class="output-value">
                        <div class="document-box">
                            <i class="fas fa-file-pdf" style="color: #ef4444; font-size: 18px;"></i>
                            <div>
                                <span
                                    style="display: block; font-size: 14px; font-weight: 600;">surat_dispensasi_kegiatan.pdf</span>
                                <span style="font-size: 12px; color: #64748b;">1.4 MB</span>
                            </div>
                            <a href="#" class="btn-view-doc" target="_blank">
                                <i class="fas fa-external-link-alt"></i> Lihat File
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

</body>

</html>
