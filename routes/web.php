<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::get('/inventory', [DashboardController::class,'show'])->name('inventory');

Route::get('car/search', [CarController::class, 'search'])->name('car.search');
Route::get('car/watchlist', [CarController::class, 'watchlist'])->name('car.watchlist');
Route::resource('car', CarController::class);
Route::get('signup', [SignupController::class, 'create'])->name('signup');

Route::get('login', [LoginController::class, 'login'])->name('login');