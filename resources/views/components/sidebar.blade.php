<aside class="sidebar">
    <div class="sidebar-header">
        <i class="fas fa-university"></i>
        <span>Sistem Kehadiran</span>
    </div>

    <nav class="sidebar-nav">
        <ul>
            <li class="{{ request()->is('mahasiswa') ? 'active' : '' }}">
                <a href="/mahasiswa">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>

            <li class="{{ request()->is('scan-absensi') ? 'active' : '' }}">
                <a href="/scan-absensi">
                    <i class="fas fa-qrcode"></i>
                    Scan Absensi
                </a>
            </li>

            <li class="{{ request()->is('jadwal-kuliah') ? 'active' : '' }}">
                <a href="/jadwal-kuliah">
                    <i class="fas fa-calendar-alt"></i>
                    Jadwal Kuliah
                </a>
            </li>

           <li class="{{ request()->is('riwayat-kehadiran') ? 'active' : '' }}">
               <a href="/riwayat-kehadiran">
                 <i class="fas fa-history"></i>
                  Riwayat Kehadiran
               </a>
           </li>

           <li class="{{ request()->is('pengajuan-izin') ? 'active' : '' }}">
               <a href="/pengajuan-izin">
                   <i class="fas fa-file-signature"></i>
                   <span>Pengajuan Izin</span>
                </a>
            </li>
            
            <li class="{{ request()->is('profile') ? 'active' : '' }}">
                <a href="/profile">
                  <i class="fas fa-user"></i>
                   Profile
                </a>
            </li>

        </ul>
    </nav>

    <div class="sidebar-footer">
        <a href="/login" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </a>
    </div>
</aside>