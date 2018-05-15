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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/france', 'RegionController@index')->name('region.regionIndex');
Route::get('/france/{region}', 'RegionController@view')->name('region.regionView');


Auth::routes();
