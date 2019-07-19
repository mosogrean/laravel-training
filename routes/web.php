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
 
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/book/create', 'BookController@index')->name('book.index');
Route::get('/book/update/{id}', 'BookController@edit')->name('book.edit');
Route::post('/book/store', 'BookController@store')->name('book.store');
Route::post('/book/update', 'BookController@update')->name('book.update');
Route::post('/book/delete', 'BookController@delete')->name('book.delete');

