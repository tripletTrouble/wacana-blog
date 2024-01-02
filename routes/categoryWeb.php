<?php
use App\Http\Controllers\CategoryWebController;
use Illuminate\Support\Facades\Route;

Route::controller(CategoryWebController::class)->group(function () {
    Route::get('categories', 'index')->name('categories.index');
    Route::get('categories/{name}/posts', 'posts')->name('categories.posts');
});