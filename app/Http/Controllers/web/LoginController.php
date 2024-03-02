<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function loginPage()
    {
        $site = [
            'title' => "Web Peminjaman Buku | Login"
        ];
        return view('pages.login', compact('site'));
    }
    public function loginAction(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->with('message', ['color' => 'red', 'message' => "Username atau sandi yang dimasukkan salah"]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('')->with('message', ['color' => 'green', 'message' => "berhasil Keluar"]);
    }
}
