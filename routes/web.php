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

Route::get('/', 'ProductController@welcome');

Route::get('/product/{product}/show', 'ProductController@view')->name('product.view'); 
Route::get('/product/{product}/buy', 'ProductController@buy')->name('product.buy');
Route::post('/product/order', 'ProductController@order')->name('product.order');


 
Route::get('/product/create', 'ProductController@create')->name('product.create')->middleware('auth');
Route::post('/product/store', 'ProductController@store')->name('product.store');

Route::get('/admin/orders', 'HomeController@adminOrderList')->name('admin.order');
Route::get('/user/orders', 'HomeController@userOrderList')->name('user.order');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
