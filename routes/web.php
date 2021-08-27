<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/grid','App\Http\Controllers\GridController@show');

Route::get('handle-payment', [App\Http\Controllers\PayPalPaymentController::class, 'handlePayment'])->name('make.payment');
Route::get('cancel-payment', [App\Http\Controllers\PayPalPaymentController::class, 'paymentCancel'])->name('cancel.payment');
Route::get('payment-success', [App\Http\Controllers\PayPalPaymentController::class, 'paymentSuccess'])->name('success.payment');
