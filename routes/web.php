<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LayananController;

// Rute untuk publik (app.blade.php)
Route::get('/', [LayananController::class, 'index'])->name('home');
Route::get('/layanan/{slug}', [LayananController::class, 'show'])->name('layanan.show');


// Rute Autentikasi
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Rute untuk Admin (membutuhkan autentikasi)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $layanans = App\Models\Layanan::all(); // Ambil semua layanan untuk ditampilkan
        return view('admin.dashboard', compact('layanans'));
    })->name('dashboard');

    Route::get('/admin/layanan/{layanan}/edit', [LayananController::class, 'edit'])->name('layanan.edit');
    Route::put('/admin/layanan/{layanan}', [LayananController::class, 'update'])->name('layanan.update');
});