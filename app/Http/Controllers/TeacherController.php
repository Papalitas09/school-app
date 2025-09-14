<?php

namespace App\Http\Controllers;

use App\Models\Teacher; // Impor model Teacher
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // READ: Menampilkan semua data guru
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    // CREATE: Menampilkan form tambah data
    public function create()
    {
        return view('teachers.create');
    }

    // CREATE: Menyimpan data baru dari form
    public function store(Request $request)
    {
        // Menyimpan data yang dikirim dari form ke database
        Teacher::create($request->all());
        
        // Mengarahkan kembali ke halaman daftar guru dengan pesan sukses
        return redirect('/teachers')->with('success', 'Data guru berhasil ditambahkan!');
    }

    // UPDATE: Menampilkan form edit
    public function edit(Teacher $teacher)
    {
        // Mengirim data guru ke view untuk diedit
        return view('teachers.edit', compact('teacher'));
    }

    // UPDATE: Memperbarui data yang ada
    public function update(Request $request, Teacher $teacher)
    {
        // Memperbarui data guru di database
        $teacher->update($request->all());
        
        // Mengarahkan kembali ke halaman daftar guru dengan pesan sukses
        return redirect('/teachers')->with('success', 'Data guru berhasil diperbarui!');
    }

    // DELETE: Menghapus data
    public function destroy(Teacher $teacher)
    {
        // Menghapus data guru dari database
        $teacher->delete();
        
        // Mengarahkan kembali ke halaman daftar guru dengan pesan sukses
        return redirect('/teachers')->with('success', 'Data guru berhasil dihapus!');
    }
}
