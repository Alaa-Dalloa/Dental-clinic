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


//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function(){

    return view('welcome');
});
Route::get('/blog_single',function(){

    return view('front.blog_single');
});
Route::get('/blog',function(){

    return view('front.blog');
});
Route::get('/contact',function(){

    return view('front.contact');
});
Route::get('/doctors',function(){

    return view('front.doctors');
});
Route::get('/home', 'HomeController@index')->name('home');




Route::get('/operations/create', 'OperationsController@create')->name('operations.create');
Route::get('/operations', 'OperationsController@index')->name('operations.index');
Route::get('/operations/{id}', 'OperationsController@destroy')->name('operations.destroy');
Route::get('/operations/{id}/edit', 'OperationsController@edit')->name('operations.edit');
Route::post('/operations/{id}/update', 'OperationsController@update')->name('operations.update');
Route::post('/operations/store', 'OperationsController@store')->name('operations.store');


Route::get('/specializations/create', 'SpecializationsController@create')->name('specializations.create');
Route::get('/specializations', 'SpecializationsController@index')->name('specializations.index');
Route::get('/specializations/{id}', 'SpecializationsController@destroy')->name('specializations.destroy');
Route::get('/specializations/{id}/edit', 'SpecializationsController@edit')->name('specializations.edit');
Route::post('/specializations/{id}/update', 'SpecializationsController@update')->name('specializations.update');
Route::post('/specializations/store', 'SpecializationsController@store')->name('specializations.store');



Route::get('/patients/create', 'PatientController@create')->name('patients.create');
Route::get('/patients', 'PatientController@index')->name('patients.index');
Route::get('/patients/{id}', 'PatientController@destroy')->name('patients.destroy');
Route::get('/patients/{id}/edit', 'PatientController@edit')->name('patients.edit');
Route::post('/patients/{id}/update', 'PatientController@update')->name('patients.update');
Route::post('/patients/store', 'PatientController@store')->name('patients.store');



Route::get('/doctors/create', 'DoctorController@create')->name('doctors.create');
Route::get('/doctors', 'DoctorController@index')->name('doctors.index');
Route::get('/doctors/{id}', 'DoctorController@destroy')->name('doctors.destroy');
Route::get('/doctors/{id}/edit', 'DoctorController@edit')->name('doctors.edit');
Route::post('/doctors/{id}/update', 'DoctorController@update')->name('doctors.update');
Route::post('/doctors/store', 'DoctorController@store')->name('doctors.store');


Route::get('/reveals/create', 'RevealController@create')->name('reveals.create');
Route::get('/reveals', 'RevealController@index')->name('reveals.index');
Route::get('/reveals/{id}', 'RevealController@destroy')->name('reveals.destroy');
Route::get('/reveals/{id}/edit', 'RevealController@edit')->name('reveals.edit');
Route::post('/reveals/{id}/update', 'RevealController@update')->name('reveals.update');
Route::post('/reveals/store', 'RevealController@store')->name('reveals.store');




Route::get('/offers/create', 'OfferController@create')->name('offers.create');
Route::get('/offers', 'OfferController@index')->name('offers.index');
Route::get('/offers/{id}', 'OfferController@destroy')->name('offers.destroy');
Route::get('/offers/{id}/edit', 'OfferController@edit')->name('offers.edit');
Route::post('/offers/{id}/update', 'OfferController@update')->name('offers.update');
Route::post('/offers/store', 'OfferController@store')->name('offers.store');




Route::get('/services/create', 'ServicesController@create')->name('services.create');
Route::get('/services', 'ServicesController@index')->name('services.index');
Route::get('/services/{id}', 'ServicesController@destroy')->name('services.destroy');
Route::get('/services/{id}/edit', 'ServicesController@edit')->name('services.edit');
Route::post('/services/{id}/update', 'ServicesController@update')->name('services.update');
Route::post('/services/store', 'ServicesController@store')->name('services.store');




 Route::get('/reservations/create', 'ReservationsController@create')->name('reservations.create');
Route::get('/reservations', 'ReservationsController@index')->name('reservations.index');
Route::get('/reservations/{id}', 'ReservationsController@destroy')->name('reservations.destroy');
Route::get('/reservations/{id}/edit', 'ReservationsController@edit')->name('reservations.edit');
Route::post('/reservations/{id}/update', 'ReservationsController@update')->name('reservations.update');
Route::post('/reservations/store', 'ReservationsController@store')->name('reservations.store');

