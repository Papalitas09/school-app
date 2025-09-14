<?php
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\StudentController; 
use App\Http\Controllers\TeacherController; 
use App\Http\Controllers\SchoolClassController; 
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\Auth\RegisterController;
// Route::resource otomatis membuat 7 route CRUD untuk Siswa
Route::resource('/students', StudentController::class);
// Route::resource otomatis membuat 7 route CRUD untuk Guru
Route::resource('/teachers', TeacherController::class);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/', [HomeController::class, 'index']);
Route::resource('school-classes', SchoolClassController::class);
Auth::routes();

Route::middleware(['auth'])->group(function () { 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 
Route::resource('students', StudentController::class); 
Route::resource('teachers', TeacherController::class); 
Route::resource('school-classes', SchoolClassController::class); 
}); 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
