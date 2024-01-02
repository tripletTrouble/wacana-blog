<?php
use App\Http\Controllers\AuthorWebController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthorWebController::class)->group(function () {
    Route::get('author/{uuid}/posts', 'posts')->name('author.posts');
});