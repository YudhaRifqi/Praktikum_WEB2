<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\returnSelf;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function loginStore(Request $request)
    {
        $credential = $request->only('username', 'password');
        if (Auth::attempt($credential)) {
            switch (Auth::user()->hak_akses) {
                case 'admin':
                    return Redirect()->route('admin.beranda')->with('Sukses', 'anda berhasil login');
                case 'mahasiswa':
                    dd('beranda belum dibuat');
                default:
                    return redirect()->route('auth.login')->with('erorr', 'gagal melakukan login');
            }
        } else {
            dd('gagal login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login')->with('Suksus', 'anda berhasil logout');
    }
}
