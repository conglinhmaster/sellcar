<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('categories', 'CategoryController@index')->name('category.index');
Route::post('/categories', 'CategoryController@store')->name('category.store');
Route::get('/categories/add', 'CategoryController@create')->name('category.add');
Route::get('/categories/{id}/delete', 'CategoryController@delete')->name('category.delete');
Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('category.edit');
Route::post('/categories/edit', 'CategoryController@update')->name('category.update');
