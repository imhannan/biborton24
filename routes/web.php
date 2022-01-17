<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::get('/categories/{category}/posts', [CategoryController::class, 'posts']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/{post}/comments', [CommentController::class, 'index']);
Route::get('/posts/{post}/comments/{comment}', [CommentController::class, 'show']);
Route::get('/profiles', [ProfileController::class, 'index']);
Route::get('/profiles/{profile}', [ProfileController::class, 'show']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/posts/{post}/comments', [CommentController::class, 'store']);
    Route::post('/profiles', [ProfileController::class, 'store']);
    Route::post('/profiles/{profile}/update', [ProfileController::class, 'update']);
});

require __DIR__ . '/auth.php';
