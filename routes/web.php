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

Route::get('/', 'pagescontroller@index');
Route::get('/about', 'PagesController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/reveals/create', 'RevealsController@create')->name('reveals.create');
Route::get('/reveals', 'RevealsController@index')->name('reveals.index');
Route::get('/reveals/{id}', 'RevealsController@destroy')->name('reveals.destroy');
Route::get('/reveals/{id}/edit', 'RevealsController@edit')->name('reveals.edit');
Route::post('/reveals/{id}/update', 'RevealsController@update')->name('reveals.update');
Route::post('/reveals/store', 'RevealsController@store')->name('reveals.store');




Route::get('/operations/create', 'OperationsController@create')->name('operations.create');
Route::get('/operations', 'OperationsController@index')->name('operations.index');
Route::get('/operations/{id}', 'OperationsController@destroy')->name('operations.destroy');
Route::get('/operations/{id}/edit', 'OperationsController@edit')->name('operations.edit');
Route::post('/operations/{id}/update', 'OperationsController@update')->name('operations.update');
Route::post('/operations/store', 'OperationsController@store')->name('operations.store');
