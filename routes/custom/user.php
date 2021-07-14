<?php
Route::prefix('user')
->group(function () {
    Route::get('/', [App\Http\Controllers\User\UserController::class, 'show'])
    ->name('user.index');
});