<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

<<<<<<< HEAD
Route::get('/','HomeController@index');

Route::get('pages/{id}', 'PagesController@show');
=======
Route::get('/', 'HomeController@index');

Route::get('pages/{id}', 'PagesController@show');
Route::post('comment/store', 'CommentsController@store');
>>>>>>> cdd12dff195457bd30766f6c16d0cb8a174686df

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
<<<<<<< HEAD
Route::post('comment/store', 'CommentsController@store');

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function()
{
	Route::get('/','AdminHomeController@index');
	Route::resource('pages','PagesController');
	 Route::resource('comments', 'CommentsController');
});
=======

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
{
  Route::get('/', 'AdminHomeController@index');
  Route::resource('pages', 'PagesController');
  Route::resource('comments', 'CommentsController');
});
>>>>>>> cdd12dff195457bd30766f6c16d0cb8a174686df
