<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Scan Absensi</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (biar icon jalan) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- QR Scanner -->
    <script src="https://unpkg.com/html5-qrcode"></script>

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

<!-- SIDEBAR -->
@include('components.sidebar')

<!-- CONTENT -->
<div class="main-content">

    <div class="container-fluid">
        <h3 class="mb-4 fw-bold">📷 Scan Absensi</h3>

        <div class="card shadow-sm">
            <div class="card-body text-center">

                <div id="reader" style="width:100%; max-width:400px; margin:auto;"></div>

                <p class="mt-3 text-muted">Arahkan kamera ke QR Code</p>

                <div id="result" class="alert alert-success mt-3 d-none"></div>

            </div>
        </div>
    </div>

</div>

<script>
function onScanSuccess(decodedText) {

    const resultDiv = document.getElementById('result');
    resultDiv.classList.remove('d-none');
    resultDiv.innerText = "QR Terbaca: " + decodedText;

    fetch('/absen', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ qr: decodedText })
    })
    .then(res => res.json())
    .then(data => {
        alert("Absensi berhasil!");
    });
}

let scanner = new Html5QrcodeScanner("reader", {
    fps: 10,
    qrbox: 250
});

scanner.render(onScanSuccess);
</script>

</body>
</html>