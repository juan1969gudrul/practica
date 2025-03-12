<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

// Rutas públicas
Route::get('/', function () {
    return view('main');
})->name('home');

Route::resource('alumno', AlumnoController::class)->middleware('auth');

Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');

// Rutas de autenticación y perfil
Route::get('/dashboard', function () {
    return view('main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Rutas de alumnos (protegidas por autenticación)
    Route::resource('alumno', AlumnoController::class);
});

require __DIR__.'/auth.php';
