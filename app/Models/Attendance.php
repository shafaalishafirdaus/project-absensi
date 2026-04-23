<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendances';

    protected $fillable = [
        'nama',
        'nim',
        'kelas',
        'matkul',
        'dosen',
        'waktu',
        'status',
        'bukti',
    ];
}