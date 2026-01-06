<?php

use App\Http\Controllers\authorController;
use App\Http\Controllers\bookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('books', bookController::class);(bookController::class);
Route::resource('authors', authorController::class);(bookController::class);
