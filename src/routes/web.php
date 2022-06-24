<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/{post}/show', [PostController::class, 'show'])
    ->where(['post', '[0-9]+'])
    ->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->where(['post', '[0-9]+'])
    ->name('posts.edit');

Route::patch('/posts/{post}/toggle', [PostController::class, 'toggle'])
    ->where(['post', '[0-9]+'])
    ->name('posts.toggle');


Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('posts/store', [PostController::class, 'store'])
    ->name('posts.store');

Route::patch('/posts/{post}/update', [PostController::class, 'update'])
    ->where(['post', '[0-9]+'])
    ->name('posts.update');


Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])
    ->where(['post', '[0-9]+'])
    ->name('posts.destroy');



Route::post('/posts/{post}/comment', [CommentController::class, 'store'])
    ->where('post', '[0-9]+')
    ->name('comments.store');

Route::delete('/comments/{comment}/destroy', [CommentController::class, 'destroy'])
    ->where('comment', '[0-9]+')
    ->name('comments.destroy');

