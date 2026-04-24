<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Scan Absensi</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/html5-qrcode"></script>

    <style>
        body {
            margin: 0;
            background: #f4f6fb;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        h3 {
            font-size: 22px;
            margin-bottom: 20px;
        }

        /* CARD */
        .card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            text-align: center;
        }

        /* QR BOX */
        #reader {
            width: 100%;
            max-width: 400px;
            margin: auto;
            border-radius: 12px;
            overflow: hidden;
        }

        /* TEXT */
        .text-muted {
            color: #6b7280;
            margin-top: 10px;
        }

        /* RESULT */
        .result-box {
            margin-top: 15px;
            padding: 10px;
            border-radius: 8px;
            background: #dcfce7;
            color: #166534;
            display: none;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 15px;
            }
        }
    </style>
</head>

<body>

@include('components.sidebar')

<div class="main-content">

    <h3>📷 Scan Absensi</h3>

    <div class="card">

        <div id="reader"></div>

        <p class="text-muted">Arahkan kamera ke QR Code</p>

        <div id="result" class="result-box"></div>

    </div>

</div>

<script>
function onScanSuccess(decodedText) {

    const resultDiv = document.getElementById('result');

    resultDiv.style.display = "block";
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
    })
    .catch(err => {
        alert("Gagal absen!");
        console.log(err);
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