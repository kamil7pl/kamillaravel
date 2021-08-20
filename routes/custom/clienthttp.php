<?php
Route::prefix('clienthttp')
->group(function () {
    Route::get('/', [App\Http\Controllers\Clienthttp\ClienthttpController::class, 'index'])
    ->name('clienthttp.index');
    Route::post('/post', [App\Http\Controllers\Clienthttp\ClienthttpController::class, 'send'])
    ->name('clienthttp.post.index');
});