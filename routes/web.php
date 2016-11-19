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

Route::get('/', [
	'uses' => 'PageController@getIndex',
	'as' => 'home'
	]);
Route::get('/about', [
	'uses' => 'PageController@getAbout',
	'as' => 'about'
	]);
Route::get('/contact', [
	'uses' => 'PageController@getContact',
	'as' => 'contact'
	]);
Route::resource('posts', 'PostController');
