<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController; // <--- 1. TAMBAHKAN BARIS INI
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicSiswaController;
use App\Http\Controllers\DashboardController;

// Route untuk Publik (Tanpa perlu login)
Route::get('/daftar', [PublicSiswaController::class, 'create'])->name('pendaftaran.create');
Route::post('/daftar', [PublicSiswaController::class, 'store'])->name('pendaftaran.store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('siswa', SiswaController::class); // <--- 2. TAMBAHKAN BARIS INI
});

require __DIR__.'/auth.php';