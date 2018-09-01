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
Route::get('/', 'UserController@isLogged');
Route::get('/@{username}', 'UserController@showUser');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
  Route::get('/upload', 'PostController@upload');
  Route::post('/uploadPost', 'PostController@uploadPost');
});