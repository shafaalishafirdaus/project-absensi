<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Scan Absensi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/html5-qrcode"></script>
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
            text-align: center;
        }

        #reader {
            width: 100%;
            max-width: 350px;
            margin: auto;
            border-radius: 12px;
            overflow: hidden;
            border: 2px dashed #ddd;
        }

        /* Container Tombol Absen */
        .attendance-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 25px;
        }

        .btn-absen {
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            transition: transform 0.2s, opacity 0.2s;
        }

        .btn-absen:active {
            transform: scale(0.95);
        }

        /* Warna Tombol */
        .btn-hadir {
            background-color: #22c55e;
            color: white;
            grid-column: span 2;
        }

        /* Hadir lebar penuh */
        .btn-izin {
            background-color: #f59e0b;
            color: white;
        }

        .btn-sakit {
            background-color: #ef4444;
            color: white;
        }

        .text-muted {
            color: #6b7280;
            font-size: 14px;
            margin-top: 15px;
        }

        #result {
            margin-top: 15px;
            padding: 10px;
            border-radius: 8px;
            display: none;
            font-weight: bold;
        }
    </style>
</head>

<body class="dashboard-page">

    @include('components.sidebar')

    <main class="main-content">
        <h3 class="fw-bold mb-4">
            <i class="fas fa-camera"></i> Scan Absensi
        </h3>

        <div class="card">
            <!-- Scanner -->
            <div id="reader"></div>
            <p class="text-muted">Scan QR Code terlebih dahulu (Opsional/Wajib)</p>

            <!-- Status Absen -->
            <div class="attendance-actions">
                <!-- Tombol Hadir -->
                <button class="btn-absen btn-hadir" onclick="prosesAbsen('hadir')">
                    <i class="fas fa-check-circle fa-lg"></i>
                    Hadir Sekarang
                </button>

                <!-- Tombol Izin (Redirect ke halaman pengajuan) -->
                <button class="btn-absen btn-izin" onclick="keHalamanIzin()">
                    <i class="fas fa-envelope-open-text fa-lg"></i>
                    Izin
                </button>

                <!-- Tombol Sakit -->
                <button class="btn-absen btn-sakit" onclick="prosesAbsen('sakit')">
                    <i class="fas fa-form-pulse fa-lg"></i>
                    Sakit
                </button>
            </div>

            <div id="result"></div>
        </div>
    </main>

    <script>
        let lastScannedQR = "";

        function onScanSuccess(decodedText) {
            lastScannedQR = decodedText;
            const resultDiv = document.getElementById('result');
            resultDiv.style.display = "block";
            resultDiv.style.background = "#dcfce7";
            resultDiv.style.color = "#166534";
            resultDiv.innerText = "QR Terverifikasi! Silahkan pilih status kehadiran.";
        }

        // Inisialisasi Scanner
        let scanner = new Html5QrcodeScanner("reader", {
            fps: 10,
            qrbox: 200
        });
        scanner.render(onScanSuccess);

        // Fungsi Kirim Absen (Hadir/Sakit)
        function prosesAbsen(status) {
            // Validasi jika wajib scan QR dulu
            if (!lastScannedQR) {
                alert("Silahkan scan QR Code terlebih dahulu!");
                return;
            }

            fetch('/absen', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        qr: lastScannedQR,
                        status: status
                    })
                })
                .then(res => res.json())
                .then(data => {
                    alert("Berhasil mencatat kehadiran: " + status);
                    location.reload(); // Refresh halaman setelah sukses
                })
                .catch(err => {
                    alert("Gagal mengirim absensi.");
                    console.error(err);
                });
        }

        // Fungsi Redirect Izin
        function keHalamanIzin() {
            // Arahkan ke route pengajuan izin (sesuaikan dengan route Laravel kamu)
            window.location.href = "/pengajuan-izin";
        }
    </script>

</body>

</html>
