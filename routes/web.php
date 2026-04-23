<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', [AttendanceController::class, 'index']);


Route::get('/mahasiswa', function () {
    return view('mahasiswa.dashboard');
});

Route::get('/dosen', function () {
    return view('dosen.dashboard');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});