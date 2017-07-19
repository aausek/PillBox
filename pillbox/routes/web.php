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
// Route::get('/admin', ['middleware' => 'admin', 'uses' => 'AdminsController@index']);
//Route::get('/newrxs', 'PagesController@newrxs');
Route::resource('newrxs', 'AdminsController');
//Route::get('/newrxs', 'AdminsController@show');
Route::get('admin', ['middleware' => 'admin', function () {
    return view('pages.admin');
}]);

