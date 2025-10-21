<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
   public function toArray(Request $request): array 
    { 
        return [ 
            'id_siswa' => $this->id, 
            'nomor_induk_siswa' => $this->nis, 
            'nama_lengkap' => $this->nama, 
            'email_pribadi' => $this->email, 
            'jenis_kelamin' => $this->gender, 
            'tanggal_lahir' => $this->tanggal_lahir, 
            'alamat_lengkap' => $this->alamat, 
            'kelas' => $this->whenLoaded('schoolClass', function () { 
                return $this->schoolClass->name; 
            }), 
        ]; 
    }
}
