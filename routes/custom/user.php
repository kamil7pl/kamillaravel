<?php
Route::prefix('user')
->group(function(){
    Route::get('/', [App\Http\Controllers\UserController::class, 'show'])
    ->name('user.index');
});