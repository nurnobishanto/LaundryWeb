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
Route::get('/cart/get', [\App\Http\Controllers\CartController::class,'getCart'])->name('getCart');
Route::post('/cart/add', [\App\Http\Controllers\CartController::class,'addToCart'])->name('addToCart');
Route::patch('/cart/update', [\App\Http\Controllers\CartController::class,'updateCart'])->name('updateCart');
Route::delete('/cart/remove', [\App\Http\Controllers\CartController::class,'removeFromCart'])->name('removeFromCart');
Route::delete('/cart/minus', [\App\Http\Controllers\CartController::class,'minusFromCart'])->name('minusFromCart');
Route::post('/cart/order-confirm', [\App\Http\Controllers\CartController::class,'orderConfirm'])->name('orderConfirm');

Auth::routes();
Route::get('/', [App\Http\Controllers\WebsiteController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\WebsiteController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\WebsiteController::class, 'contact'])->name('contact');
Route::get('/privacy', [App\Http\Controllers\WebsiteController::class, 'privacy'])->name('privacy');
Route::get('/terms', [App\Http\Controllers\WebsiteController::class, 'terms'])->name('terms');
Route::get('/service/{id}', [App\Http\Controllers\WebsiteController::class, 'service'])->name('service');
Route::get('/profile',[\App\Http\Controllers\WebsiteController::class,'profile'])->name('profile')->middleware('auth');
Route::get('/my-address',[\App\Http\Controllers\WebsiteController::class,'my_address'])->name('my_address')->middleware('auth');
Route::get('/my-orders',[\App\Http\Controllers\WebsiteController::class,'my_orders'])->name('my_orders')->middleware('auth');
Route::post('/add-address',[\App\Http\Controllers\WebsiteController::class,'add_address'])->name('add_address')->middleware('auth');
Route::get('checkout',[\App\Http\Controllers\WebsiteController::class,'checkout'])->name('checkout')->middleware('auth');




