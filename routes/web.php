<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['guest'])->group(function () {

    Route::view('/register','auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');

    Route::get('car/search', [CarController::class, 'search'])->name('car.search');
    Route::get('car/watchlist', [CarController::class, 'watchlist'])->name('car.watchlist');
    Route::resource('car', CarController::class);
});

