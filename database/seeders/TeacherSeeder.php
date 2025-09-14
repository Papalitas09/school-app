<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; // Import class Faker
class TeacherSeeder extends Seeder
{
/**
* Run the database seeds.
*/
public function run(): void
{
$faker = Faker::create('id_ID'); // Membuat instance Faker dengan lokal Indonesia
for ($i = 0; $i < 10; $i++) { // Loop untuk membuat 10 data guru dummy
\DB::table('teachers')->insert([ // Menggunakan DB facade untuk insert data
'nip' => $faker->unique()->randomNumber(8), // NIP unik 10 digit angka
'nama' => $faker->name, // Nama acak
'bidang_studi' => $faker->randomElement(['Matematika', 'Bahasa Indonesia', 'Produktif RPL', 'Basis Data', 'Pendidikan Agama Islam', 'Bahasa Inggris', 'Olahraga', 'Sejarah']), // Bidang studi acak
'email' => $faker->unique()->safeEmail, // Email unik
'created_at' => now(), // Waktu dibuat sekarang
'updated_at' => now(), // Waktu diperbarui sekarang
]);
}
}
}