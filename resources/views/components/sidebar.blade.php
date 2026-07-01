<aside class="sidebar">
    <div class="sidebar-header">
        <i class="fas fa-university"></i>
        <span>Sistem Kehadiran</span>
    </div>

    <nav class="sidebar-nav">
        <ul>
            @if(Session::get('role') == 'mahasiswa')
                <li class="{{ request()->is('beranda-mahasiswa') ? 'active' : '' }}">
                    <a href="/beranda-mahasiswa"><i class="fas fa-home"></i>Beranda Mahasiswa</a>
                </li>
                <li class="{{ request()->is('scan-absensi') ? 'active' : '' }}">
                    <a href="/scan-absensi"><i class="fas fa-qrcode"></i>Scan Absensi</a>
                </li>
                <li class="{{ request()->is('jam-mata-kuliah') ? 'active' : '' }}">
                    <a href="/jam-mata-kuliah"><i class="fas fa-qrcode"></i>Jam Mata Kuliah</a>
                </li>
                <li class="{{ request()->is('kalender-akademik') ? 'active' : '' }}">
                    <a href="/kalender-akademik"><i class="fas fa-qrcode"></i>Kalender Akademik</a>
                </li>
                <li class="{{ request()->is('riwayat-rekap-kehadiran') ? 'active' : '' }}">
                    <a href="/riwayat-rekap-kehadiran"><i class="fas fa-user-check"></i>Riwayat & Rekap Kehadiran</a>
                </li>
                <li class="{{ request()->is('form-izin') ? 'active' : '' }}">
                    <a href="/form-izin"><i class="fas fa-envelope-open-text"></i>Form Izin</a>
                </li>
                <li class="{{ request()->is('dokumen-pendukung') ? 'active' : '' }}">
                    <a href="/dokumen-pendukung"><i class="fas fa-qrcode"></i>Dokumen Pendukung</a>
                </li>
            @endif

            {{-- @if(Session::get('role') == 'dosen')
                <li class="{{ request()->is('dashboard-dosen') ? 'active' : '' }}">
                    <a href="/dashboard-dosen"><i class="fas fa-chalkboard-teacher"></i>Panel Dosen</a>
                </li>
                <li class="{{ request()->is('jadwal-mengajar') ? 'active' : '' }}">
                    <a href="/jadwal-mengajar"><i class="fas fa-calendar-alt"></i>Jadwal Mengajar</a>
                </li>
                <li class="{{ request()->is('verifikasi-izin') ? 'active' : '' }}">
                    <a href="/verifikasi-izin"><i class="fas fa-check-double"></i>Verifikasi Izin</a>
                </li>
                <li class="{{ request()->is('rekap-presensi') ? 'active' : '' }}">
                    <a href="/rekap-presensi"><i class="fas fa-file-export"></i>Rekap Kelas</a>
                </li>
            @endif

            @if(Session::get('role') == 'admin')
                <li class="{{ request()->is('dashboard-admin') ? 'active' : '' }}">
                    <a href="/dashboard-admin"><i class="fas fa-user-shield"></i>Control Panel</a>
                </li>
                <li class="{{ request()->is('kelola-user') ? 'active' : '' }}">
                    <a href="/kelola-user"><i class="fas fa-users-cog"></i>Data Mahasiswa & Dosen</a>
                </li>
                <li class="{{ request()->is('kelola-matkul') ? 'active' : '' }}">
                    <a href="/kelola-matkul"><i class="fas fa-book"></i>Master Mata Kuliah</a>
                </li>
                <li class="{{ request()->is('laporan-sistem') ? 'active' : '' }}">
                    <a href="/laporan-sistem"><i class="fas fa-chart-line"></i>Laporan Global</a>
                </li>
            @endif --}}

            <hr style="margin: 10px 0; border: 0; border-top: 1px solid #eee;">
            
            <li class="{{ request()->is('profile') ? 'active' : '' }}">
                <a href="/profile">
                  <i class="fas fa-user-circle"></i>
                   Profile Saya
                </a>
            </li>
        </ul>
    </nav>

    <div class="sidebar-footer">
        <a href="/login" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>
</aside>