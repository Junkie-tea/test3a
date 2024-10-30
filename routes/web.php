<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SinglePostController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/post', [SinglePostController::class, 'index'])->name('post.index');

Route::post('/post/{id}', [SinglePostController::class, 'show'])->name('post.wtf');
