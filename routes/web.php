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

Route::get('/form', [App\Http\Controllers\RequestController::class, 'index'])->name('form.index');
Route::put('/request', [App\Http\Controllers\RequestController::class, 'store'])->name('request.index');
