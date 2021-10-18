<?php
Route::prefix('p24')
->group(function () {
    Route::get('/', [App\Http\Controllers\P24\P24Controller::class, 'index'])
    ->name('p24.index');
});