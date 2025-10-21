<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\AuthController; 

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () { 
Route::post('/logout', [AuthController::class, 'logout']); 
Route::apiResource('students', StudentController::class); 
// Nanti rute guru, kelas, dll juga bisa dimasukkan ke sini 
});