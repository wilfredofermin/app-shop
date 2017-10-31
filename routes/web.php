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

Route::get('/','TestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/app','TestController');

//PRDOUCTS
Route::get('/admin/products','ProductController@index');// Listado
Route::get('/admin/products/create','ProductController@create');// Muestra el formulario
Route::post('/admin/products','ProductController@store'); // Registra el producto
