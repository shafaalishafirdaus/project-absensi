<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Izin;

class IzinController extends Controller
{
    public function create()
    {
        return view('dashboard.pengajuan_izin');
    }

    public function store(Request $request)
    {
        $izin = new Izin();
        $izin->matkul = $request->matkul;
        $izin->dosen = $request->dosen;
        $izin->tanggal = $request->tanggal;
        $izin->jenis = $request->jenis;
        $izin->alasan = $request->alasan;
        $izin->dokumen = $request->file('dokumen') 
            ? $request->file('dokumen')->store('dokumen','public') :null;

        $izin->save();

        return redirect()->route('riwayat.izin')
                 ->with('success', 'Pengajuan berhasil dikirim!');
    }

    // TAMBAHKAN DI SINI
    public function index()
    {
        $data = Izin::latest()->get();

        return view('dashboard.riwayat', compact('data'));
    }
}