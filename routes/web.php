<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BaskettController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BasketConfirmController;
use App\Http\Controllers\UserController;
use App\Models\User;



Route::get('/', function () {

});

Route::prefix('admin')->middleware('isLogin')->group(function (){
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login/post', [AuthController::class, 'loginPost'])->name('admin.login.post');
});

Route::prefix('admin')->middleware('isAdmin')->group(function (){
Route::get('dashboard', [MainController::class, 'index'])->name('dashboard');

Route::resource('product', ProductController::class);
Route::resource('brand', BrandController::class);
Route::resource('basket', BaskettController::class);
Route::resource('order', OrderController::class);
Route::resource('user', UserController::class);

Route::post('status/{id}', [BasketConfirmController::class, 'status_update'])->name('status_update');
Route::resource('confirm', BasketConfirmController::class);

Route::post('create/order', [OrderController::class, 'createOrder'])->name('create.order');
Route::get('admin/confirmation', [BasketConfirmController::class, 'Confirmation'])->name('admin.confirm');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

