<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::prefix('customer')->middleware(['auth'])->group(function () {
    Route::get('/home', [CustomerController::class, 'home']);
    Route::get('/class-schedule', [CustomerController::class, 'classSchedule']);
    Route::post('/class-schedule/{id}/book', [CustomerController::class, 'bookClass'])->name('customer.schedule.book');
    Route::get('/class-detail', [CustomerController::class, 'classDetail']);
    Route::get('/membership', [CustomerController::class, 'membership']);
    Route::get('/checkout', [CustomerController::class, 'checkout']);
    Route::post('/checkout', [CustomerController::class, 'processCheckout']);
    Route::get('/payment-success', [CustomerController::class, 'paymentSuccess']);
    Route::get('/manage-payment', [CustomerController::class, 'managePayment']);
    Route::get('/add-new-card', [CustomerController::class, 'addNewCard']);
    Route::get('/confirm-card', [CustomerController::class, 'confirmCard']);
    Route::get('/edit-card', [CustomerController::class, 'editCard']);
    Route::get('/profile', [CustomerController::class, 'profile']);
    Route::get('/card-added-success', [CustomerController::class, 'cardAddedSuccess']);
    Route::get('/confirm-remove-card', [CustomerController::class, 'confirmRemoveCard']);
});
