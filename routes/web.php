<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [IndexController::class, 'home'])->name('home');

// Group admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});
