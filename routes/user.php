<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\User\CardController;
use App\Http\Controllers\Dashboard\User\DepositController;
use App\Http\Controllers\Dashboard\User\PricingController;
use App\Http\Controllers\Dashboard\User\ProductController;
use App\Http\Controllers\Dashboard\User\ProfileController;
use App\Http\Controllers\Dashboard\User\DashboardController;
use App\Http\Controllers\Dashboard\User\WithdrawalController;
use App\Http\Controllers\Dashboard\User\VerificationController;
use App\Models\Investment;

Route::middleware('user')->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/verification', [VerificationController::class, 'index'])->name('verification');
    Route::get('/resend/verification', [VerificationController::class, 'resendVerification'])->name('resend.verification');
    Route::post('/submit/verification', [VerificationController::class, 'submitVerification'])->name('submit.verification');

    Route::post('deposit/index', [DepositController::class, 'index'])->name('deposit.index');
    Route::get('deposit/pricings', [PricingController::class, 'index'])->name('deposit.pricing.index');
    Route::get('deposit/checkout/{uuid}', [DepositController::class, 'checkout'])->name('deposit.checkout');

    Route::get('withdraw/index', [WithdrawalController::class, 'index'])->name('withdraw.index');
    Route::post('withdraw/crypto/preview', [WithdrawalController::class, 'cryptoWithdrawalPreview'])->name('withdraw.crypto.preview');
    Route::post('withdraw/bank/preview', [WithdrawalController::class, 'bankWithdrawalPreview'])->name('withdraw.bank.preview');
    Route::post('withdraw/proceed/', [WithdrawalController::class, 'proceedWithdrawal'])->name('withdraw.proceed');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('card/index', [CardController::class, 'index'])->name('card.index');
    Route::post('card/store', [CardController::class, 'store'])->name('card.store');

    Route::get('product/index', [ProductController::class, 'index'])->name('product.index');
    Route::post('product/investment', [ProductController::class, 'investment'])->name('product.investment');

    Route::get('investment/index', [ProductController::class, 'showInvestments'])->name('investment.index');
});
