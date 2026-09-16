<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/product', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/product/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/product', 'App\Http\Controllers\ProductController@save')->name('product.save');
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/product/{id}/edit', 'App\Http\Controllers\ProductController@edit')->name('product.edit');
Route::put('/product/{id}', 'App\Http\Controllers\ProductController@update')->name('product.update');
Route::delete('/product/{id}', 'App\Http\Controllers\ProductController@delete')->name('product.delete');