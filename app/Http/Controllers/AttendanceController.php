<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function riwayat()
    {
        // Membuat data dummy manual (Tanpa Database)
        $data = [
            (object) [
                'created_at' => now()->subDays(1),
                'matkul' => 'Pemrograman Web',
                'dosen' => 'Budi Santoso, M.Kom',
                'waktu' => '08:00 - 10:00',
                'status' => 'hadir',
                'bukti' => null
            ],
            (object) [
                'created_at' => now()->subDays(2),
                'matkul' => 'Basis Data',
                'dosen' => 'Siti Aminah, S.T',
                'waktu' => '13:00 - 15:00',
                'status' => 'izin',
                'bukti' => 'izin-sakit.jpg' // Contoh path dummy
            ],
            (object) [
                'created_at' => now()->subDays(3),
                'matkul' => 'Jaringan Komputer',
                'dosen' => 'Dr. Irwan Syah',
                'waktu' => '10:00 - 12:00',
                'status' => 'alpha',
                'bukti' => null
            ],
            (object) [
                'created_at' => now()->subDays(4),
                'matkul' => 'Matematika Diskrit',
                'dosen' => 'Linda Wati, M.Si',
                'waktu' => '08:00 - 10:00',
                'status' => 'hadir',
                'bukti' => null
            ],
        ];

        // Data untuk Chart
        $chart = [
            'hadir' => 12,
            'izin' => 3,
            'alpha' => 1,
        ];

        return view('dashboard.riwayat', compact('data', 'chart'));
    }
}