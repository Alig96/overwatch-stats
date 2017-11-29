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
    return view('welcome');
});

Route::get('/user/', 'UserController@index')->name('user.index');
Route::get('/user/{region}/{user}', 'UserController@show')->name('user.show');
Route::get('/user/{region}/{user}/update', 'UserController@update')->name('user.update');