@extends('layouts.main')
@section('title', 'Daftar Siswa')
@section('content')
<div class="container mx-auto py-12 px-4">
<div class="flex justify-between items-center mb-6">
<h1 class="text-3xl font-bold text-white">Daftar Siswa</h1>
<a href="{{ route('students.create') }}" class="bg-sky-600 text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:bg-sky-700 transition-colors duration-300">+ Tambah Siswa</a>
</div>
@if (session('success'))
<div class="bg-green-500 text-white px-4 py-3 rounded-lg relative mb-6 text-center shadow-md animate-fade-in-down">
<span class="block sm:inline">{{ session('success') }}</span>
</div>
@endif
<div class="bg-gray-800 rounded-2xl shadow-2xl overflow-x-auto border border-gray-700">
<table class="min-w-full divide-y divide-gray-700">
<thead class="bg-gray-700">
<tr>
<th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">#</th>
<th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">NIS</th>
<th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">Nama</th>
<th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">Email</th>
<th scope="col" class="px-6 py-4 text-center text-xs font-semibold text-gray-400 uppercase tracking-wider">Aksi</th>
</tr>
</thead>
<tbody class="bg-gray-800 divide-y divide-gray-700">
@forelse($students as $student)
<tr class="hover:bg-gray-700 transition-colors duration-200">
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $loop->iteration }}</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $student->nis }}</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $student->nama }}</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $student->email }}</td>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
<div class="flex justify-center space-x-2">
<a href="{{ route('students.edit', $student->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition-colors duration-200">Edit</a>
<form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-block">
@csrf
@method('DELETE')
<button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors duration-200" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
</form>
</div>
</td>
</tr>
@empty
<tr><td colspan="5" class="text-center py-6 text-gray-400">Tidak ada data siswa.</td></tr>
@endforelse
</tbody>
</table>
</div>
</div>
@endsection