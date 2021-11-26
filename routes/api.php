<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/me', [AuthController::class, 'me']);
Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);

?>