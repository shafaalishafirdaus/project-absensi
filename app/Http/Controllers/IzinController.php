<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IzinController extends Controller
{
    public function create()
    {
        return view('dashboard.pengajuan_izin');
    }

    public function store(Request $request)
    {
        // sementara dump dulu
        dd($request->all());
    }
}