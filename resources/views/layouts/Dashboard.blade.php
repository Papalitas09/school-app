@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
<div class="py-20 px-4 text-white">
<div class="container mx-auto p-8 bg-gray-800 rounded-3xl shadow-2xl text-center border-2 border-sky-500">
<h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">Dashboard Aplikasi</h1>
<p class="text-gray-400 max-w-xl mx-auto leading-relaxed">
Halaman ini akan menjadi pusat kontrol personal Anda setelah kita membangun fitur otentikasi dan hak akses.
</p>
<div class="mt-10 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
<a href="#" class="bg-sky-600 text-white px-8 py-4 rounded-full font-semibold shadow-xl hover:bg-sky-700 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">Mulai Jelajah</a>
<a href="#" class="bg-gray-700 text-gray-200 px-8 py-4 rounded-full font-semibold shadow-xl hover:bg-gray-600 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">Bantuan</a>
</div>
</div>
</div>
@endsection