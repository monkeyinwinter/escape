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

Auth::routes();
Route::get('/', 'HomeController@home')->name('home');

Route::get('users','UsersController@getInfos');
Route::post('users','UsersController@postInfos');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

Route::get('photo', 'PhotoController@getForm');
Route::post('photo', 'PhotoController@postForm');

Route::get('email', 'EmailController@getForm');
Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);



Route::get('/france', 'RegionController@index')->name('choix_site.choix_region');
Route::get('/france/{region}/{departement}', 'RegionController@new')->name('choix_site.choix_spot');
Route::get('/france/{region}', 'RegionController@view')->name('choix_site.choix_departement');
