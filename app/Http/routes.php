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

Route::get('/', 'PostsController@index');
Route::get('/articles', 'PostsController@index');
Route::get('/articles/{slug}', 'PostsController@show');
Route::get('/rss', 'RssController@index');



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Admin routes
Route::get('admin/dashboard', 'Admin\DashboardController@index');
Route::resource('admin/posts', 'Admin\PostsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/tags', 'Admin\TagsController');
Route::get('admin/configurations', 'Admin\ConfigurationsController@show');
Route::get('admin/configurations/edit', 'Admin\ConfigurationsController@edit');
Route::put('admin/configurations/{id}', 'Admin\ConfigurationsController@update');