<?php

use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::Resource('reviews', ReviewController::class);