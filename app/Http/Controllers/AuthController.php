<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function form()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // cek langsung (tanpa hash)
        $user = DB::table('users')
            ->where('email', $email)
            ->where('password', $password)
            ->first();

        if ($user) {
            Session::put('user', $user);
            return redirect('/home');
        }

        return "Login gagal";
    }

    public function home()
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }

        return "Halo, " . Session::get('user')->name;
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/login');
    }
}