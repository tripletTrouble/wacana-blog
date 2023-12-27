<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PostController::class)->group(function () {
    Route::get('posts', 'index');
    Route::get('posts/{slug}', 'show');
});

Route::controller(AuthorController::class)->group(function () {
    Route::get('authors', 'index');
    Route::get('authors/{author_uuid}', 'show');
    Route::get('authors/{author_uuid}/posts', 'posts');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('categories', 'index');
    Route::get('categories/{category_name}/posts', 'showPosts');
});
