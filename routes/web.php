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

//Route::get('/', 'ProductController@index');
//Route::get('/product/{id}','ProductController@show');


Route::get('/', function (){ return view('views.index'); });

//Route::resource('api/product', 'ProductController')->middleware('cors');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('product','ProductController@store')->middleware(['cors']);
