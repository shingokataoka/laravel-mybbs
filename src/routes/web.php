<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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
    ->name('index');

Route::get('/posts/{post}/show', [PostController::class, 'show'])
    ->where(['post', '[0-9]+'])
    ->name('show');

    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->where(['post', '[0-9]+'])
    ->name('edit');

Route::patch('/posts/{post}/toggle', [PostController::class, 'toggle'])
    ->where(['post', '[0-9]+'])
    ->name('toggle');


Route::get('/post/create', [PostController::class, 'create'])
    ->name('create');

Route::post('/store', [PostController::class, 'store'])
    ->name('store');

Route::delete('/post/{post}/destroy', [PostController::class, 'destroy'])
    ->name('destroy');


