<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Profile\ProfileController;

Route::prefix('/admin')->name('admin.')->group(function () {
    // Authentication routes
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');
    Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

    // Authenticated routes
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/', [Analytics::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('profile', ProfileController::class);
    });
});