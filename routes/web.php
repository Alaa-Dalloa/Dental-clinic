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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/specializations/create', 'SpecializationsController@create')->name('specializations.create');
Route::get('/specializations', 'SpecializationsController@index')->name('specializations.index');
Route::get('/specializations/{id}', 'SpecializationsController@destroy')->name('specializations.destroy');
Route::get('/specializations/{id}/edit', 'SpecializationsController@edit')->name('specializations.edit');
Route::post('/specializations/{id}/update', 'SpecializationsController@update')->name('specializations.update');
Route::post('/specializations/store', 'SpecializationsController@store')->name('specializations.store');