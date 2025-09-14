<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; // Import class Faker
class StudentSeeder extends Seeder
{
/**
* Run the database seeds.
*/
public function run(): void
{
$faker = Faker::create('id_ID'); // Membuat instance Faker dengan lokal Indonesia
for ($i = 0; $i < 20; $i++) { // Loop untuk membuat 20 data siswa dummy
\DB::table('students')->insert([ // Menggunakan DB facade untuk insert data
'nis' => $faker->unique()->randomNumber(8), // NIS unik 8 digit angka
'nama' => $faker->name, // Nama acak
'tanggal_lahir' => $faker->date('Y-m-d', '2008-01-01'), // Tanggal lahir max tahun 2008
'gender' => $faker->randomElement(['L', 'P']), // Gender L atau P
'alamat' => $faker->address, // Alamat acak
'email' => $faker->unique()->safeEmail, // Email unik
'created_at' => now(), // Waktu dibuat sekarang
'updated_at' => now(), // Waktu diperbarui sekarang
]);
}
}
}

