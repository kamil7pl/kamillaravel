<?php
Route::prefix('klient')
->group(function(){
    Route::get('/', [App\Http\Controllers\KlientController::class, 'show'])
    ->name('front.klient.index');
    Route::get('/profil', [App\Http\Controllers\KlientProfilController::class, 'show'])
    ->name('front.klient.profil.index');
    Route::get('/spotkania', [App\Http\Controllers\KlientSpotkaniaController::class, 'show'])
    ->name('front.klient.spotkania.index');
    Route::get('/kalendarz', [App\Http\Controllers\KlientKalendarzController::class, 'show'])
    ->name('front.klient.kalendarz.index');
    Route::get('/oceny', [App\Http\Controllers\KlientOcenyController::class, 'show'])
    ->name('front.klient.oceny.index');
    Route::get('/wiadomosci', [App\Http\Controllers\KlientWiadomosciController::class, 'show'])
    ->name('front.klient.wiadomosci.index');
});

Route::prefix('user')
->group(function(){
    Route::get('/', [App\Http\Controllers\UserController::class, 'show'])
    ->name('front.user.index');
});