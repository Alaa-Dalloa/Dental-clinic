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
Route::get('/about',function(){

    return view('front.about');
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