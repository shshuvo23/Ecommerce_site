<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\CustomerController;

Route::middleware(['customer'])->group(function(){

    Route::get('/customer/dashboard', [CustomerController::class, 'customerDashoard'])->name('customer.dashboard');
    // Route::get('/', [CustomerAuthController::class, 'dashboard'])->name('customer.dashboard');
});
