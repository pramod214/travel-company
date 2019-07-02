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


//Frontend
Route::get('/','FrontEndController@index')->name('front.index');
Route::get('/blogs','FrontEndController@blogs')->name('front.blogs');
Route::get('/tour','FrontEndController@tour')->name('front.tour');
Route::get('/destination','FrontEndController@destination')->name('front.destination');
Route::get('/contact','FrontEndController@contact')->name('front.contact');