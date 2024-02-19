<?php

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


Auth::routes();
Route::get('/', [App\Http\Controllers\WebsiteController::class, 'index'])->name('home');
Route::get('/service/{id}', [App\Http\Controllers\WebsiteController::class, 'service'])->name('service');
Route::get('/cart/get', [\App\Http\Controllers\CartController::class,'getCart'])->name('getCart');
Route::post('/cart/add', [\App\Http\Controllers\CartController::class,'addToCart'])->name('addToCart');
Route::patch('/cart/update', [\App\Http\Controllers\CartController::class,'updateCart'])->name('updateCart');
Route::delete('/cart/remove', [\App\Http\Controllers\CartController::class,'removeFromCart'])->name('removeFromCart');
Route::delete('/cart/minus', [\App\Http\Controllers\CartController::class,'minusFromCart'])->name('minusFromCart');
Route::post('/cart/order-confirm', [\App\Http\Controllers\CartController::class,'orderConfirm'])->name('orderConfirm');

Route::get('checkout',[\App\Http\Controllers\CartController::class,'checkout'])->name('checkout');
