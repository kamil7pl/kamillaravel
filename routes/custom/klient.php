<?php
Route::prefix('klient')
->group(function () {
    Route::get('/', [App\Http\Controllers\Klient\KlientController::class, 'show'])
    ->name('klient.index');
    Route::get('/profil', [App\Http\Controllers\Klient\KlientProfilController::class, 'show'])
    ->name('klient.profil.index');
    Route::get('/dane', [App\Http\Controllers\Klient\KlientDaneController::class, 'show'])
    ->name('klient.dane.index');
    Route::get('/dane/aktualizacja', [App\Http\Controllers\Klient\KlientDaneAktualizacjaController::class, 'show'])
    ->name('klient.dane.aktualizacja.index');
    Route::get('/spotkania', [App\Http\Controllers\Klient\KlientSpotkaniaController::class, 'show'])
    ->name('klient.spotkania.index');
});