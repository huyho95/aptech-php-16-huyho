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

Route::get('users/index', 'UserController@index');
Route::get('users/create', 'UserController@create');
Route::post('users/dang-ky', 'UserController@store');
Route::get('users/index', 'UserController@index');
Route::get('users/show/{id}','UserController@show');

Route::get('users/edit/{id}', 'UserController@edit');
Route::put('users/edit/{id}', 'UserController@update');
Route::delete('users/{id}','UserController@destroy');
