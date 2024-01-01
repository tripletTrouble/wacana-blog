<?php
use App\Http\Controllers\PostWebController;
use Illuminate\Support\Facades\Route;

Route::controller(PostWebController::class)->group(function () {
    Route::get('/posts/{slug}', 'show')->name('posts.show');
});