<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowCategoryProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', [ShowCategoryProductController::class, 'showByCategory'])->name('category.product-show');
Route::get('/product-detail/{id}', [HomeController::class, 'productdetails'])->name('product-detail');
Route::get('/all-product', [HomeController::class, 'allProduct'])->name('product.all');
// Route::get('/popular-product', [HomeController::class, 'popularProduct'])->name('product.popular');
Route::get('/login/registertion', [HomeController::class, 'login'])->name('login-registration');

Route::get('/customer-registerForm', [CustomerController::class, 'index'])->name('customer.register-page');
Route::post('/customer-register', [CustomerController::class, 'create'])->name('customer.register');
// Route::get('/product/cart', [CartController::class, 'index'])->name('product.cart');


Route::get('/customer-loginForm', [CustomerAuthController::class, 'index'])->name('customer.login-page');
Route::post('/customer-login', [CustomerAuthController::class, 'login'])->name('customer.login');

Route::get('/product/detail/{id}', [HomeController::class, 'productDetail'])->name('product.detail');


// Route::get('/customer/registertion', [])->name('customer.register-page');

// Route::middleware(['customer'])->group(function(){
//     Route::get('/customer-dashboard', [CustomerAuthController::class, 'dashboard'])->name('customer.dashboard');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add/customer', [CustomerController::class, 'index'])->name('customer.add');
    Route::post('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::get('/customer/manage', [CustomerController::class, 'manage'])->name('customer.list');

    Route::get('/add/category', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/create/category', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/manage/category', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/edit/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/add/brand', [BrandController::class, 'index'])->name('brand.add');
    Route::post('/create/brand', [BrandController::class, 'create'])->name('brand.create');
    Route::get('/manage/brand', [BrandController::class, 'manage'])->name('brand.manage');
    Route::get('/edit/brand/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/update/brand/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/delete/brand/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/product-list', [ProductController::class, 'productList'])->name('admin.product-list');
    Route::get('/product-list-offer/{id}', [ProductController::class, 'productStatus'])->name('admin.product-Status');
    Route::get('/product-list/{id}', [ProductController::class, 'productOfferStatus'])->name('admin.product-Offer-Status');
    Route::get('/product/detail/admin{id}' , [ProductController::class, 'productDetailadmin'])->name('admin.product-detail');





    Route::get('/add/employee', [EmployeeController::class, 'index'])->name('employee.add');
    Route::post('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::get('/employee/list', [EmployeeController::class, 'manage'])->name('employee.manage');
    Route::get('/employee/Status/{id}', [EmployeeController::class, 'employeeStatus'])->name('employee.status');
});

Route::get('/employee/login', [EmployeeAuthController::class, 'index'])->name('employee');
Route::post('/employee/login', [EmployeeAuthController::class, 'login'])->name('employee.login');

Route::middleware(['employee'])->group(function () {
    Route::get('/employee/dashboard', [EmployeeAuthController::class, 'dashboard'])->name('employee.dashboard');

    Route::get('/employee/category-list', [CategoryController::class, 'categoryList'])->name('employee.category-list');


    Route::get('/product/add', [ProductController::class, 'index'])->name('product.add');
    Route::post('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/product/manage', [ProductController::class, 'manage'])->name('product.manage');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');

    Route::get('/product/discount/{id}', [ProductController::class, 'discountProduct'])->name('product.discount');
    Route::Post('/product/discount-add/{id}', [ProductController::class, 'discountAddProduct'])->name('product.discount-add');
    Route::get('/product/discount-remove/{id}', [ProductController::class, 'removeProductDiscount'])->name('product.discount-remove');

    Route::get('/product/detail/{id}', [ProductController::class, 'productDetail'])->name('product.detail');
});



