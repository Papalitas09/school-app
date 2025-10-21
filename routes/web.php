<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
/* RUTE AUTENTIKASI (DEFINISI MANUAL) */
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
/* RUTE TERPROTEKSI */
Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('school-classes', SchoolClassController::class);
});
