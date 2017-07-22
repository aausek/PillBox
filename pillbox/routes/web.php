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

Auth::routes();

Route::get('/home', 'PagesController@scripts');
Route::get('/scripts', 'PagesController@scripts');
Route::get('/users', 'UsersController@users');
Route::resource('newrxs', 'AdminsController');
Route::get('admin', 'AdminsController@create')->name('admin');


