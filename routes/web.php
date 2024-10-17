<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayPalController;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/paypal', [PayPalController::class, 'paypal'])->name('paypal');
Route::get('/success', [PayPalController::class, 'success'])->name('success');
Route::get('/cancel', [PayPalController::class, 'cancel'])->name('cancel');
