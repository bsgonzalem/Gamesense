<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::resource('users', UserController::class);
Route::resource('reviews', ReviewController::class);