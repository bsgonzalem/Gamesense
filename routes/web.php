<?php

use App\Http\Controllers\ReviewtController;
use Illuminate\Support\Facades\Route;

Route::get('/review', 'App\Http\Controllers\ReviewController@index')->name('review.index');
Route::get('/review/create', 'App\Http\Controllers\ReviewController@create')->name('review.create');
Route::post('/review', 'App\Http\Controllers\ReviewController@save')->name('review.save');
Route::get('/review/{id}', 'App\Http\Controllers\ReviewController@show')->name('review.show');
Route::get('/review/{id}/edit', 'App\Http\Controllers\ReviewController@edit')->name('review.edit');
Route::put('/review/{id}', 'App\Http\Controllers\ReviewController@update')->name('review.update');
Route::delete('/review/{id}', 'App\Http\Controllers\ReviewController@delete')->name('review.delete');