@extends('layouts.main')

@section('title', 'Daftar Guru')

@section('content')
    <h1>Daftar Guru</h1>
    <ul>
        @foreach ($daftarGuru as $guru)
            <li>{{ $guru }}</li>
        @endforeach
    </ul>
@endsection