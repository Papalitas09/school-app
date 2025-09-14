<?php
namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Ini bisa di-uncomment jika tidak dipakai
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
/**
* Seed the application's database.
*/
public function run(): void
{
// Panggil seeder lain di sini
$this->call([
StudentSeeder::class, // Panggil StudentSeeder
TeacherSeeder::class, // Panggil TeacherSeeder
// Tambahkan seeder lain jika ada di masa depan
]);
}
}