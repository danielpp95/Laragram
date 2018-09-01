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

// Users
Route::get('/@{username}', 'UserController@showUser');

// Posts
Route::get('/posts/{postId}', 'PostController@showPost');

Auth::routes();

// Need to be a Auth User
Route::group(['middleware' => 'auth'], function () {
  Route::get('/upload', 'PostController@upload');
  Route::post('/uploadPost', 'PostController@uploadPost');
});