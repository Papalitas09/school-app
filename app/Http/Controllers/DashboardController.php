<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $namaAdmin = "Muhammad Fahri Nazi"; // Contoh data admin
        $jumlahSiswa = 150;           // Contoh data
        $jumlahGuru = 15;             // Contoh data

        return view('layouts.Dashboard', compact('namaAdmin', 'jumlahSiswa', 'jumlahGuru'));
    }
}