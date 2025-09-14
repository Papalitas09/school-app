<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Tambahkan 'school_class_id' ke dalam array $fillable
    protected $fillable = [
        'nis',
        'nama',
        'tanggal_lahir',
        'gender',
        'alamat',
        'email',
        'school_class_id'
    ];

    /**
     * Dapatkan kelas sekolah yang dimiliki oleh siswa.
     */
    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class);
    }
}