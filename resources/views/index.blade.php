<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kehadiran Kampus</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"></head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="nav-logo">
                <i class="fas fa-university"></i>
                <span>Sistem Kehadiran</span>
            </a>
            <ul class="nav-menu">
                <li><a href="#features">Fitur</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li><a href="/login" class="btn-login">Masuk</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Sistem Kehadiran <span>Digital</span> Kampus</h1>
            <p>Kelola kehadiran mahasiswa dan dosen dengan mudah, cepat, dan akurat menggunakan teknologi modern.</p>
            <div class="hero-buttons">
                <a href="/login" class="btn btn-primary">Mulai Sekarang</a>
                <a href="#features" class="btn btn-outline">Pelajari Lebih</a>
            </div>
        </div>
        <div class="hero-image">
            <div class="hero-card">
                <div class="card-header">
                    <i class="fas fa-check-circle"></i>
                    <span>Kehadiran Hari Ini</span>
                </div>
                <div class="card-stats">
                    <div class="stat">
                        <span class="stat-number">847</span>
                        <span class="stat-label">Mahasiswa Hadir</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">92%</span>
                        <span class="stat-label">Tingkat Kehadiran</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <h2 class="section-title">Fitur Unggulan</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-qrcode"></i>
                    </div>
                    <h3>QR Code Absensi</h3>
                    <p>Scan QR code untuk absensi cepat dan akurat tanpa antrian.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Laporan Real-time</h3>
                    <p>Pantau statistik kehadiran secara langsung dengan visualisasi data.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h3>Notifikasi Otomatis</h3>
                    <p>Dapatkan pemberitahuan untuk ketidakhadiran dan jadwal kelas.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Responsif Mobile</h3>
                    <p>Akses sistem dari perangkat apapun, kapanpun, dimanapun.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Keamanan Data</h3>
                    <p>Data tersimpan aman dengan enkripsi tingkat tinggi.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-export"></i>
                    </div>
                    <h3>Export Laporan</h3>
                    <p>Export data kehadiran ke berbagai format (PDF, Excel).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number" data-count="5000">0</span>
                    <span class="stat-label">Mahasiswa Aktif</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="200">0</span>
                    <span class="stat-label">Dosen</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="50">0</span>
                    <span class="stat-label">Program Studi</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="98">0</span>
                    <span class="stat-label">% Kepuasan</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Tentang UniAttend</h2>
                    <p>UniAttend adalah sistem manajemen kehadiran modern yang dirancang khusus untuk lingkungan kampus. Dengan teknologi terkini, kami membantu institusi pendidikan mengelola kehadiran dengan lebih efisien.</p>
                    <ul class="about-list">
                        <li><i class="fas fa-check"></i> Integrasi dengan sistem akademik kampus</li>
                        <li><i class="fas fa-check"></i> Dashboard analitik yang komprehensif</li>
                        <li><i class="fas fa-check"></i> Dukungan multi-platform</li>
                        <li><i class="fas fa-check"></i> Backup data otomatis</li>
                    </ul>
                </div>
                <div class="about-image">
                    <div class="about-card">
                        <i class="fas fa-graduation-cap"></i>
                        <h4>Visi Kami</h4>
                        <p>Menjadi solusi kehadiran digital terdepan untuk institusi pendidikan di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Alamat</h4>
                            <p>Jl. Pendidikan No. 123, Jakarta</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Telepon</h4>
                            <p>(021) 1234-5678</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>info@uniattend.ac.id</p>
                        </div>
                    </div>
                </div>
                <form class="contact-form">
                    <div class="form-group">
                        <input type="text" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Pesan" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4><i class="fas fa-university"></i> UniAttend</h4>
                    <p>Sistem kehadiran digital modern untuk kampus Anda.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Tautan</h4>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#features">Fitur</a></li>
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="#">Panduan Pengguna</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Dukungan Teknis</a></li>
                        <li><a href="#">API Dokumentasi</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Lisensi</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 UniAttend. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
