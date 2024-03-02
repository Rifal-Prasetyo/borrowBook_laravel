<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function landingPage()
    {
        $site = [
            'title' => "Web Peminjaman Buku"
        ];
        return view('homepage', compact('site'));
    }

    public function listBooks()
    {
        $site = [
            'title' => "Web Peminjaman Buku | Daftar Buku"
        ];
        return view('pages.listBooks', compact('site'));
    }
    public function detailBook()
    {
        $site = [
            'title' => "Web Peminjaman Buku | Detail"
        ];
        return view('pages.detailBook', compact('site'));
    }
}
