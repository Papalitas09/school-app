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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id(); // Kolom ID, Primary Key, Auto-Increment
            $table->string('nip')->unique(); // Nomor Induk Pegawai, harus unik
            $table->string('nama');
            $table->string('bidang_studi'); // Contoh: Matematika, Produktif RPL
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
