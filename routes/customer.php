<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;

Route::middleware(['customer'])->group(function(){

    //customer-dashboard
    Route::get('/customer/dashboard', [CustomerController::class, 'customerDashoard'])->name('customer.dashboard');
    Route::get('/account/detail', [CustomerController::class, 'accountDetail'])->name('customer.account-detail');
    Route::get('/account/edit', [CustomerController::class, 'accountEdit'])->name('customer.account-edit');
    Route::post('/account/update/{customerid}', [CustomerController::class, 'updateAccount'])->name('customer.account-update');
    //cart
    Route::post('/cart/{id}', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/view', [CartController::class, 'viewCart'])->name('cart.view');
    Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
    Route::get('/cart/delete/{id}', [CartController::class, 'deleteCart'])->name('cart.delete');

    //order
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/checkout', [CheckoutController::class, 'processOrder'])->name('checkout');
    Route::get('/view-orderlist', [OrderController::class, 'viewOrder'])->name('order.viewlist');
    Route::get('/order-compelete/{id}', [OrderController::class, 'orderComplete'])->name('order.complete');
});
