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
Route::get('/6trfdxdestination','FrontEndController@destination')->name('front.destination');
Route::get('/contact','FrontEndController@contact')->name('front.contact');

//BackEnd
Auth::routes();

Route::get('/admindashboard','AdminController@admin_dashboard')->name('admin.dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Site Route
Route::get('sites', 'SiteController@index')->name('site.index');
Route::get('sites/create', 'SiteController@create')->name('site.create');
Route::post('sites', 'SiteController@store')->name('site.store');
Route::get('sites/{id}/edit', 'SiteController@edit')->name('site.edit');
Route::post('sites/{id}', 'SiteController@update')->name('site.update');
Route::get('admin/sites/{id}', 'SiteController@delete')->name('site.delete');

//PackageCategory
Route::get('/category','PackageCategoryController@index')->name('category.index');
Route::get('/category/create','PackageCategoryController@create')->name('category.create');
Route::post('/category/store','PackageCategoryController@store')->name('category.store');
Route::get('/admin/category-delete/{id}','PackageCategoryController@delete')->name('category.delete');

//Package
Route::get('/package','PackageController@index')->name('package.index');
Route::get('package/create','PackageController@create')->name('package.create');
Route::post('package/store','PackageController@store')->name('package.store');
Route::get('package/edit/{id}','PackageController@edit')->name('package.edit');
Route::post('package/update/{id}','PackageController@update')->name('package.update');
Route::get('/admin/package-delete/{id}','PackageController@delete')->name('package.delete');



