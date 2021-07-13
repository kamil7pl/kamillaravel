<?php

//use Illuminate\Support\Facades\Route;

Route::get('/strona',[App\Http\Controllers\PageController::class, 'show']);
//Route::get('/strona/blog',[App\Http\Controllers\PageBlogController::class, 'show']);
Route::prefix('strona')
->namespace('blog')
->group(function () {
    Route::get('/blog', [App\Http\Controllers\PageBlogController::class, 'show'])->name('strona.blog.index');
    Route::get('/blog/post', [App\Http\Controllers\PageBlogPostController::class, 'show'])->name('strona.blog.post.index');
    Route::get('/blog/komentarz', [App\Http\Controllers\PageBlogKomentarzController::class, 'show'])->name('strona.blog.komentarz.index');
});