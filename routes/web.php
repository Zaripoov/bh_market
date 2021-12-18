<?php

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/book', [\App\Http\Controllers\BookController::class, 'myBook'])->name('my_book');
Route::get('/book/create', [\App\Http\Controllers\BookController::class, 'create'])->name('book.create');
Route::post('/book/store', [\App\Http\Controllers\BookController::class, 'store'])->name('book.store');
