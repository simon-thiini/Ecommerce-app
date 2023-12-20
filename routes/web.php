<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Auth;
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
//Route::get('/order', [OrderController::class,'create'])->name('order');
//Route::post('/process-order', [OrderController::class, 'processOrder'])->name('process.order');
//Route::get('/confirmation', 'OrderController@confirmation')->name('order.confirmation');
//Route::post('/order/confirm', 'OrderController@confirmOrder')->name('confirm.order');
Route::get('/order', [OrderController::class, 'create'])->name('order');
Route::post('/process-order', [OrderController::class, 'processOrder'])->name('process.order');
Route::get('/order/confirmation/{order}', [OrderController::class, 'confirmation'])->name('order.confirmation');
Route::get('/order/{order}/edit', [OrderController::class, 'edit'])->name('order.edit');
Route::patch('/order/{order}', [OrderController::class, 'update'])->name('order.update');
//Route::post('/admin/orders/{order}/send-email', [AdminDashboardController::class, 'sendEmail'])->name('admin.orders.send-email');
Route::get('/admin/orders/{order}/send-email', [AdminDashboardController::class, 'sendEmail'])
    ->name('admin.orders.send-email');

Route::post('/admin/orders/{order}/send-email', [AdminDashboardController::class, 'sendEmail'])
    ->name('admin.orders.send-email.post');

// routes/web.php
Route::get('custom-login', 'Auth\LoginController@showLoginForm')->name('login');

// routes/web.php
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
   // Route::get('/orders', [AdminDashboardController::class, 'viewOrders'])->name('admin.orders');
    Route::get('/admin/orders', [AdminDashboardController::class, 'viewOrders'])->name('admin.orders');

});


// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//      Route::get('/dashboard', 'AdminDashboardController@index')->name('admin.dashboard');
//     Route::get('/orders', 'AdminController@viewOrders')->name('admin.orders');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
