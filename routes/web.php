<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LayananController; // Pastikan ini di-import

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
        $layanans = App\Models\Layanan::all();
        return view('admin.dashboard', compact('layanans'));
    })->name('dashboard');

    // Pastikan rute ini ada dan menggunakan PUT
    Route::put('/admin/layanan/{layanan}', [LayananController::class, 'update'])->name('layanan.update');
});