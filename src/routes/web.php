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

Route::get('/posts/{post}/show', [PostController::class, 'test'])
    ->where(['post', '[0-9]+'])
    ->name('show');

Route::patch('/posts/{post}/toggle', [PostController::class, 'test'])
    ->where(['post', '[0-9]+'])
    ->name('toggle');


Route::get('/post/create', [PostController::class, 'test'])
    ->name('create');

Route::post('/store', [PostController::class, 'test'])
    ->name('store');

Route::delete('/post/{post}/destroy', [PostController::class, 'test'])
    ->name('destroy');


