<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IzinController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login-proses', [AuthController::class, 'loginProses']);

Route::get('/beranda-mahasiswa', function () {
    return view('dashboard.mahasiswa.index');
});
Route::get('/scan-absensi', function () {
    return view('dashboard.scan_absensi');
});
Route::post('/absen', function () {
    return response()->json([
        'status' => 'success'
    ]);
});
Route::get('/jam-mata-kuliah', function () {
    return view('dashboard.jam_mata_kuliah');
});
Route::get('/kalender-akademik', function () {
    return view('dashboard.kalender_akademik');
});
Route::get('/riwayat-rekap-kehadiran', function () {
    return view('dashboard.riwayat_rekap_kehadiran');
});
Route::get('/form-izin', function () {
    return view('dashboard.form_izin');
    });
Route::get('/dokumen-pendukung', function () {
    return view('dashboard.dokumen_pendukung');
    });
Route::get('/profile', function () {
        return view('dashboard.profile');
    });

Route::get('/riwayat-kehadiran', [AttendanceController::class, 'riwayat']);
Route::get('/pengajuan-izin', [IzinController::class, 'create'])->name('izin.create');
Route::post('/pengajuan-izin', [IzinController::class, 'store'])->name('izin.store');
Route::get('/riwayat-izin', [IzinController::class, 'index'])->name('izin.index');
Route::get('/riwayat-izin', [IzinController::class, 'index'])->name('riwayat.izin');