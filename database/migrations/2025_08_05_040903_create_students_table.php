<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Kolom ID, Primary Key, Auto-Increment
            $table->string('nis')->unique(); // Nomor Induk Siswa, harus unik
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->enum('gender', ['L', 'P']); // Jenis Kelamin: Laki-laki atau Perempuan
            $table->text('alamat')->nullable(); // Alamat, bisa kosong
            $table->string('email')->unique();
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations. (Digunakan jika ingin rollback migrasi)
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
