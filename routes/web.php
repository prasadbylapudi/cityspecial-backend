<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostInteractionController;

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
Route::post('/posts', [\App\Http\Controllers\PostController::class, 'store']);
Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show']);

Route::get('/post-interactions', [PostInteractionController::class, 'getAllInteractions']);
Route::post('/post-interactions', [PostInteractionController::class, 'store']);
Route::delete('/post-interactions', [PostInteractionController::class, 'destroy']);