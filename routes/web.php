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

Route::get('/', function () {
	return view('home');
});
Route::get('users','UserController@index');
Route::resource('products','ProductController');
Route::get('products/{slug}','ProductController@category');
Route::get('types','TypeController@index');








