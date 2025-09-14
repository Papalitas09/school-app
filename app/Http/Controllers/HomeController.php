<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        $namaAplikasi = "Aplikasi Web Sekolah";
        $pengembang = "Tim Pemrograman";
        $tahun = 2024;

        // Mengirim banyak variabel menggunakan fungsi compact()
        // compact('namaAplikasi', 'pengembang', 'tahun')
        // akan menjadi:
        // ['namaAplikasi' => $namaAplikasi, 'pengembang'=> $pengembang, 'tahun' => $tahun]

        return view('about', compact('namaAplikasi', 'pengembang', 'tahun'));
    }
}