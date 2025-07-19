<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Root halaman awal
Route::get('/', function () {
    return view('app');
});

// route Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard (butuh login)
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');



