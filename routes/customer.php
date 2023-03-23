<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\CustomerAuthController;


Route::middleware(['customer'])->group(function(){


    // Route::get('/', [CustomerAuthController::class, 'dashboard'])->name('customer.dashboard');
});
