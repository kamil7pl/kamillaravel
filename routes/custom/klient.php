<?php
Route::prefix('klient')
->group(function(){
    Route::get('/', [App\Http\Controllers\Klient\KlientController::class, 'show'])
    ->name('klient.index');
    Route::get('/profil', [App\Http\Controllers\Klient\KlientProfilController::class, 'show'])
    ->name('klient.profil.index');
    Route::get('/spotkania', [App\Http\Controllers\Klient\KlientSpotkaniaController::class, 'show'])
    ->name('klient.spotkania.index');
    Route::get('/kalendarz', [App\Http\Controllers\Klient\KlientKalendarzController::class, 'show'])
    ->name('klient.kalendarz.index');
    Route::get('/oceny', [App\Http\Controllers\Klient\KlientOcenyController::class, 'show'])
    ->name('klient.oceny.index');
    Route::get('/wiadomosci', [App\Http\Controllers\Klient\KlientWiadomosciController::class, 'show'])
    ->name('klient.wiadomosci.index');
});