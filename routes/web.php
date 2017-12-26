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




Route::resource('products','ProductController');
Route::resource('orders','OrderController');
Route::resource('categories','CategoryController');
Route::resource('types','TypeController');
Route::resource('users','UserController');



Route::get('add_to_cart/{id}','ProductController@add_to_cart');
Route::get('products_manage','ProductController@manage');

Route::get('add_to_wish_list/{id}','ProductController@add_to_wish_list');
Route::get('remove_product_from_cart/{id}','ProductController@remove_product_from_cart');
Route::get('empty_cart','OrderController@empty_cart');



