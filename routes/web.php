<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\welcomeController;
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


Route::get('/', [welcomeController::class,'index'])->name('welcome');
Route::get('/aboutus', [AboutUsController::class,'about'])->name('aboutus');
Route::get('/contactus', [ContactUsController::class,'contact'])->name('contactus');
Route::get('/cover', [CoverController::class,'cover'])->name('cover');
Route::get('/products', [ProductController::class,'product'])->name('products');
Route::get('/order', [OrderController::class,'create'])->name('order');
Route::post('/process-order', [OrderController::class, 'processOrder'])->name('process.order');
Route::get('/confirmation', 'OrderController@confirmation')->name('order.confirmation');
Route::post('/order/confirm', 'OrderController@confirmOrder')->name('confirm.order');

// routes/web.php
// routes/web.php
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', 'AdminDashboardController@index')->name('admin.dashboard');
    Route::get('/orders', 'AdminController@viewOrders')->name('admin.orders');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
     Route::get('/dashboard', 'AdminDashboardController@index')->name('admin.dashboard');
    Route::get('/orders', 'AdminController@viewOrders')->name('admin.orders');
});


