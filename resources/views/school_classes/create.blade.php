@extends('layouts.main')
@section('title', 'Tambah Kelas')
@section('content')
<div class="container mx-auto py-12 px-4">
<div class="max-w-xl mx-auto p-8 bg-gray-800 rounded-3xl shadow-2xl border-2 border-sky-500">
<h1 class="text-3xl font-bold text-white mb-6">Tambah Kelas Baru</h1>
<form action="{{ route('school-classes.store') }}" method="POST">
@csrf
<div>
<label for="name" class="block text-sm font-medium text-gray-300">Nama Kelas</label>
<input type="text" name="name" id="name" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white focus:ring-sky-500 focus:border-sky-500">
</div>
<div class="mt-6 flex justify-end space-x-4">
<a href="{{ route('school-classes.index') }}" class="bg-gray-600 text-white py-2 px-4 rounded-md font-semibold hover:bg-gray-700">Batal</a>
<button type="submit" class="bg-sky-600 text-white py-2 px-4 rounded-md font-semibold hover:bg-sky-700">Simpan</button>
</div>
</form>
</div>
</div>
@endsection