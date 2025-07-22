<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LayananController;

// =========================
// Route Halaman Utama (Publik)
// =========================
Route::get('/', [LayananController::class, 'publik']); // tampilkan app.blade.php dari database

// =========================
// Route Login & Logout
// =========================
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// =========================
// Route Admin (Harus Login)
// =========================
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [LayananController::class, 'index'])->name('admin.dashboard'); // tampilkan dashboard.blade.php
    Route::post('/admin/layanan/{id}', [LayananController::class, 'update'])->name('layanan.update'); // simpan edit layanan
});
