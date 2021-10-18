<?php
Route::prefix('strona')
->group(function () {
    Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'show'])
    ->name('front.index');
    Route::get('/blog', [App\Http\Controllers\Front\FrontBlogController::class, 'show'])
    ->name('front.blog.index');
    Route::get('/blog/kategorie', [App\Http\Controllers\Front\FrontBlogKategorieController::class, 'show'])
    ->name('front.blog.kategorie.index');
    Route::get('/blog/komentarze', [App\Http\Controllers\Front\FrontBlogKomentarzeController::class, 'show'])
    ->name('front.blog.index');
    Route::get('/blog/tagi', [App\Http\Controllers\Front\FrontBlogTagiController::class, 'show'])
    ->name('front.blog.index');
});