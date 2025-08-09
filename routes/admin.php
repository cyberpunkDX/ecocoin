<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Admin\UserController;
use App\Http\Controllers\Dashboard\Admin\WalletController;
use App\Http\Controllers\Dashboard\Admin\ProfileController;
use App\Http\Controllers\Dashboard\Admin\DashboardController;
use App\Http\Controllers\Dashboard\Admin\UserDepositController;
use App\Http\Controllers\Dashboard\Admin\GeneralSettingController;
use App\Http\Controllers\Dashboard\Admin\PricingController;
use App\Http\Controllers\Dashboard\Admin\ProductController;
use App\Http\Controllers\Dashboard\Admin\UserWithdrawalMessageController;

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');

    Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/show/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{user}', [UserController::class, 'delete'])->name('user.delete');

    Route::get('/user/deposit/index/{user}', [UserDepositController::class, 'index'])->name('user.deposit.index');
    Route::get('/user/deposit/show/{user}/{deposit}', [UserDepositController::class, 'show'])->name('user.deposit.show');
    Route::post('/user/deposit/cancel/{user}/{deposit}', [UserDepositController::class, 'cancel'])->name('user.deposit.cancel');
    Route::post('/user/deposit/complete/{user}/{deposit}', [UserDepositController::class, 'complete'])->name('user.deposit.complete');
    Route::get('/user/deposit/delete/{user}/{deposit}', [UserDepositController::class, 'delete'])->name('user.deposit.delete');

    Route::get('/wallet/index', [WalletController::class, 'index'])->name('wallet.index');
    Route::get('/wallet/create', [WalletController::class, 'create'])->name('wallet.create');
    Route::post('/wallet/store', [WalletController::class, 'store'])->name('wallet.store');
    Route::get('/wallet/show/{wallet}', [WalletController::class, 'show'])->name('wallet.show');
    Route::get('/wallet/edit/{wallet}', [WalletController::class, 'edit'])->name('wallet.edit');
    Route::post('/wallet/update/{wallet}', [WalletController::class, 'update'])->name('wallet.update');
    Route::get('/wallet/delete/{wallet}', [WalletController::class, 'delete'])->name('wallet.delete');

    Route::get('/general/setting/index', [GeneralSettingController::class, 'index'])->name('general.setting.index');
    Route::post('/general/setting/update', [GeneralSettingController::class, 'update'])->name('general.setting.update');

    Route::get('/pricing/index', [PricingController::class, 'index'])->name('pricing.index');
    Route::get('/pricing/create', [PricingController::class, 'create'])->name('pricing.create');
    Route::post('/pricing/store', [PricingController::class, 'store'])->name('pricing.store');
    Route::get('/pricing/show/{pricing}', [PricingController::class, 'show'])->name('pricing.show');
    Route::get('/pricing/edit/{pricing}', [PricingController::class, 'edit'])->name('pricing.edit');
    Route::post('/pricing/update/{pricing}', [PricingController::class, 'update'])->name('pricing.update');
    Route::get('/pricing/delete/{pricing}', [PricingController::class, 'delete'])->name('pricing.delete');

    Route::get('/user/withdrawal/message/index/{user}', [UserWithdrawalMessageController::class, 'index'])->name('user.withdrawal.message.index');
    Route::post('/user/withdrawal/message/store/{user}', [UserWithdrawalMessageController::class, 'store'])->name('user.withdrawal.message.store');

    Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{product}', [ProductController::class, 'delete'])->name('product.delete');
});
