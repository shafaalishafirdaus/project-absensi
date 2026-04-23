<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance; 

class AttendanceController extends Controller
{
    public function index() 
    {
        $data = Attendance::latest()->get();
$chart = [
    'hadir' => 12,
    'izin' => 3,
    'alpha' => 1,
];

        return view('dashboard.mahasiswa', compact('data', 'chart'));
    }

    public function riwayat()
    {
        $data = Attendance::latest()->get();

        $chart = [
    'hadir' => 12,
    'izin' => 3,
    'alpha' => 1,
];

        return view('dashboard.riwayat', compact('data', 'chart'));
    }
}