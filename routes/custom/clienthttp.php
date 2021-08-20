<?php
Route::prefix('clienthttp')
->group(function () {
    Route::get('/', [App\Http\Controllers\Clienthttp\ClienthttpController::class, 'index'])
    ->name('clienthttp.index');
});