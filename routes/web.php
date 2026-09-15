<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/category', 'App\Http\Controllers\CategoryController@index')->name('category.index');
Route::get('/category/create', 'App\Http\Controllers\CategoryController@create')->name('category.create');
Route::post('/category', 'App\Http\Controllers\CategoryController@save')->name('category.save');
Route::get('/category/{id}', 'App\Http\Controllers\CategoryController@show')->name('category.show');
Route::get('/category/{id}/edit', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');
Route::put('/category/{id}', 'App\Http\Controllers\CategoryController@update')->name('category.update');
Route::delete('/category/{id}', 'App\Http\Controllers\CategoryController@delete')->name('category.delete');
