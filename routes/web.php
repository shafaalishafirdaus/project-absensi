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

// Route::get('/mahasiswa', [AttendanceController::class, 'index']);

Route::get('/mahasiswa', function () {
    return view('dashboard.mahasiswa.index');
});
Route::get('/dosen', function () {
    return view('dashboard.dosen.index');
});

Route::get('/admin', function () {
    return view('dashboard.admin.index');
});
Route::get('/scan-absensi', function () {
    return view('dashboard.scan');
});
Route::post('/absen', function () {
    return response()->json([
        'status' => 'success'
    ]);
});
Route::get('/jadwal-kuliah', function () {
    return view('dashboard.jadwal');
});
Route::get('/riwayat-kehadiran', function () {
    return view('dashboard.riwayat');
});
Route::get('/profile', function () {
    return view('dashboard.profile');
});
Route::get('/pengajuan-izin', function () {
    return view('dashboard.pengajuan_izin');
});
Route::get('/riwayat-kehadiran', [AttendanceController::class, 'riwayat']);
Route::get('/pengajuan-izin', [IzinController::class, 'create'])->name('izin.create');
Route::post('/pengajuan-izin', [IzinController::class, 'store'])->name('izin.store');