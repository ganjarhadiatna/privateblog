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
Route::middleware('auth')->group(function() {
	Route::get('/dashboard', 'AdminController@index')->name('dashboard');
	
	Route::get('/setting/title', 'AdminController@settingTitle')->name('title');
	Route::post('/setting/title/save', 'SettingController@saveTitle');

	Route::get('/setting/info', 'AdminController@settingInfo')->name('info');
	Route::get('/setting/info/add', 'AdminController@settingInfoAdd')->name('info add');
	Route::get('/setting/info/edit/{id}', 'AdminController@settingInfoEdit')->name('info edit');
	Route::post('/setting/info/save', 'SettingController@saveInfo');
	Route::post('/setting/info/edit', 'SettingController@editInfo');
	Route::post('/setting/info/delete', 'SettingController@deleteInfo');

	Route::get('/setting/icon', 'AdminController@settingIcon')->name('icon');
	Route::get('/setting/icon/add', 'AdminController@settingIconAdd')->name('icon add');
	Route::get('/setting/icon/edit/{id}', 'AdminController@settingIconEdit')->name('icon edit');
	Route::post('/setting/icon/save', 'SettingController@saveIcon');
	Route::post('/setting/icon/edit', 'SettingController@editIcon');
	Route::post('/setting/icon/delete', 'SettingController@deleteIcon');

	Route::get('/setting/logo', 'AdminController@settingLogo')->name('logo');
	Route::post('/setting/logo/save', 'SettingController@saveLogo');
	Route::post('/setting/banner/save', 'SettingController@saveBanner');
});
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
