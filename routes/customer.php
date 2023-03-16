<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\CustomerAuthController;


Route::middleware(['customer'])->group(function(){
    Route::get('/customer-dashboard', [CustomerAuthController::class, 'dashboard'])->name('customer.dashboard');
});
