<?php

use Illuminate\Support\Facades\Route;

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
Route::resource("client","ClientController");
Route::resource("user","UserController");

Route::resource('login', 'UserLoginController');
Route::get('/', 'UserLoginController@index')->name("login");
Route::get('logout', 'UserLoginController@logout');
