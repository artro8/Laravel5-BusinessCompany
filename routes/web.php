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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/offers', 'PagesController@offers');
Route::get('/contact', 'PagesController@contact');

Route::post('/offers', 'PagesController@store');
Route::get('/admin/dashboard', 'PagesController@adminDashboard');
Route::get('/admin/profile', 'PagesController@adminProfile');
Route::get('/admin/offers', 'PagesController@adminOffers');
Route::post('/admin/logout', 'PagesController@adminLogout');
Route::get('/admin/offer/edit/{id}', 'PagesController@edit');
Route::get('/admin/offer/delete/{id}', 'PagesController@delete');
Route::get('/admin/offer/create', 'PagesController@create');
Route::get('/offer/{id}', 'PagesController@show');
Route::patch('/admin/offer/{id}', 'PagesController@update');


Auth::routes();

