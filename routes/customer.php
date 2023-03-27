<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;

Route::middleware(['customer'])->group(function(){

    Route::get('/customer/dashboard', [CustomerController::class, 'customerDashoard'])->name('customer.dashboard');
    Route::post('/product/cart', [CartController::class, 'add_to_cart'])->name('cart.add');
    Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
    Route::get('/product/cartItem', [CartController::class, 'index'])->name('cart.index');
});
