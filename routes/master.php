<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Master\AdminController;
use App\Http\Controllers\Dashboard\Master\ProfileController;
use App\Http\Controllers\Dashboard\Master\DashboardController;

Route::middleware('master')->prefix('master')->name('master.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');

    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/show/{admin}', [AdminController::class, 'show'])->name('admin.show');
    Route::get('/admin/edit/{admin}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/update/{admin}', [AdminController::class, 'update'])->name('admin.update');
});
