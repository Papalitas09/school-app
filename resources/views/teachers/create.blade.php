@extends('layouts.main')
@section('title', 'Tambah Guru')
@section('content')
<div class="container mx-auto py-12 px-4">
<div class="max-w-xl mx-auto p-8 bg-gray-800 rounded-3xl shadow-2xl border-2 border-sky-500">
<div class="flex justify-between items-center mb-6">
<h1 class="text-3xl font-bold text-white">Tambah Guru Baru</h1>
<a href="{{ route('teachers.index') }}" class="text-gray-400 hover:text-white transition-colors duration-300">
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
Kembali
</a>
</div>
<form action="{{ route('teachers.store') }}" method="POST" class="space-y-4">
@csrf
<div>
<label for="nip" class="block text-sm font-medium text-gray-300">NIP</label>
<input type="text" name="nip" id="nip" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white focus:ring-sky-500 focus:border-sky-500">
</div>
<div>
<label for="nama" class="block text-sm font-medium text-gray-300">Nama</label>
<input type="text" name="nama" id="nama" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white focus:ring-sky-500 focus:border-sky-500">
</div>
<div>
<label for="email" class="block text-sm font-medium text-gray-300">Email</label>
<input type="email" name="email" id="email" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white focus:ring-sky-500 focus:border-sky-500">
</div>
<div>
<label for="bidang_studi" class="block text-sm font-medium text-gray-300">Bidang Studi</label>
<input type="text" name="bidang_studi" id="bidang_studi" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white focus:ring-sky-500 focus:border-sky-500">
</div>
<div class="mt-6">
<button type="submit" class="w-full bg-sky-600 text-white py-2 px-4 rounded-md font-semibold hover:bg-sky-700 transition-colors duration-300">Simpan Data Guru</button>
</div>
</form>
</div>
</div>
@endsection