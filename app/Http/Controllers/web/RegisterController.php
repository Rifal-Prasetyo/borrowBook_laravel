<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function registerPage()
    {
        $site = [
            'title' => "Web Peminjaman Buku | Daftar"
        ];
        return view('pages.register', compact('site'));
    }
}
