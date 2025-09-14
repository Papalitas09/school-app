@extends('layouts.main')
@section('title', 'Tentang')
@section('content')
<div class="py-20 md:py-24 px-4">
<div class="container mx-auto p-10 bg-gray-800 rounded-3xl shadow-2xl text-center border-2 border-sky-500">
<h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">Tentang Aplikasi Kami</h1>
<p class="text-gray-400 max-w-2xl mx-auto mb-10 leading-relaxed">
Aplikasi ini merupakan proyek pembelajaran yang dirancang untuk mengaplikasikan berbagai konsep pengembangan web modern menggunakan <strong>framework
Laravel</strong>. Setiap fitur yang kita bangun didasarkan pada kebutuhan riil di dunia kerja.
</p>
<div class="mt-8 text-left inline-block">
<h2 class="text-2xl font-semibold mb-4 text-white">Dibangun Oleh:</h2>
<ul class="list-none space-y-2 text-gray-400 pl-0">
<li class="flex items-center space-x-2">
<svg class="h-6 w-6 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
<span>Siswa XII Rekayasa Perangkat Lunak SMK Plus Pelita Nusantara</span>
</li>
</ul>
</div>
</div>
</div>
@endsection