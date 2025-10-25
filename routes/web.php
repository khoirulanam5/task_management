<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('auth.login');
});

// Authentikasi
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'auth'])->name('auth');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('regist', [AuthController::class, 'regist'])->name('regist');
Route::post('regist', [AuthController::class, 'store'])->name('regist.store');

// Menu
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
