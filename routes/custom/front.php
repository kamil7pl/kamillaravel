<?php
Route::prefix('klient')
->group(function(){
    Route::get('/', [App\Http\Controllers\KlientController::class, 'show'])
    ->name('index');
    Route::get('/profil', [App\Http\Controllers\KlientProfilController::class, 'show'])
    ->name('profil.index');
    Route::get('/dane', [App\Http\Controllers\KlientDaneController::class, 'show'])
    ->name('dane.index');
    Route::get('/dane/aktualizacja', [App\Http\Controllers\KlientDaneaktualizacjaController::class, 'show'])
    ->name('dane.aktualizacja.index');
    Route::get('/spotkania', [App\Http\Controllers\KlientSpotkaniaController::class, 'show'])
    ->name('spotkania.index');
});