<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginProses(Request $request)
    {
    $email = $request->email;
    $password = $request->password;

    // Cari user yang email dan passwordnya cocok
    $user = DB::table('users')
                ->where('email', $email)
                ->where('password', $password)
                ->first();

    if ($user) {
        // Simpan session dasar
        Session::put('user_id', $user->id);
        Session::put('role', $user->role);
        Session::put('name', $user->name);

        // Redirect otomatis berdasarkan role yang ada di database
        if ($user->role == 'admin') {
            return redirect('/admin');
        } elseif ($user->role == 'dosen') {
            return redirect('/dosen');
        } elseif ($user->role == 'mahasiswa') {
            return redirect('/mahasiswa');
        }
    }

    // Jika tidak ketemu
    return back()->with('error', 'Email atau Password salah!');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
}