<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;


Route::middleware(['customer'])->group(function(){

    Route::get('/customer/dashboard', [CustomerController::class, 'customerDashoard'])->name('customer.dashboard');
    Route::get('/account/detail', [CustomerController::class, 'accountDetail'])->name('customer.account-detail');
    Route::get('/account/edit', [CustomerController::class, 'accountEdit'])->name('customer.account-edit');
    Route::post('/account/update/{customerid}', [CustomerController::class, 'updateAccount'])->name('customer.account-update');
    Route::post('/cart/{id}', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/view', [CartController::class, 'viewCart'])->name('cart.view');
    Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
    Route::get('/cart/delete/{id}', [CartController::class, 'deleteCart'])->name('cart.delete');
});
