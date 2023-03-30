<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;

Route::middleware(['customer'])->group(function(){

    Route::get('/customer/dashboard', [CustomerController::class, 'customerDashoard'])->name('customer.dashboard');
    Route::post('/cart/{id}', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/view', [CartController::class, 'viewCart'])->name('cart.view');
    Route::get('/cart/delete/{id}', [CartController::class, 'deleteCart'])->name('cart.delete');
});
