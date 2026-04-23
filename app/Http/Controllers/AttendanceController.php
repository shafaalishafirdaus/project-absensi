<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance; 

class AttendanceController extends Controller
{
    public function index() 
    {
        $data = Attendance::all();
        return view('dashboard', compact('data'));
    }
}