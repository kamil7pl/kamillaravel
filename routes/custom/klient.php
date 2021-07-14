<?php
Route::prefix('klient')
->group(function(){
    Route::get('/', [App\Http\Controllers\KlientController::class, 'show'])
    ->name('klient.index');
    Route::get('/profil', [App\Http\Controllers\KlientProfilController::class, 'show'])
    ->name('klient.profil.index');
    Route::get('/spotkania', [App\Http\Controllers\KlientSpotkaniaController::class, 'show'])
    ->name('klient.spotkania.index');
    Route::get('/kalendarz', [App\Http\Controllers\KlientKalendarzController::class, 'show'])
    ->name('klient.kalendarz.index');
    Route::get('/oceny', [App\Http\Controllers\KlientOcenyController::class, 'show'])
    ->name('klient.oceny.index');
    Route::get('/wiadomosci', [App\Http\Controllers\KlientWiadomosciController::class, 'show'])
    ->name('klient.wiadomosci.index');
});