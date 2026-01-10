<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)
    ->name('welcome');

Route::get('/about', [WelcomeController::class, 'about'])
    ->name('about');

Route::get('/customer', [PageController::class, 'customer'])->name('customer');
Route::get('/about', [PageController::class, 'aboutUs'])->name('about.us');
Route::get('/legal/documentation', [PageController::class, 'legalDocumentation'])->name('legal.documentation');
Route::get('/help/center', [PageController::class, 'helpCenter'])->name('help.center');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
