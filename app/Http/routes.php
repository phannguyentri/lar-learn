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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
	return view('admin.module.login.login');
});

Route::get('login', ['as' => 'getLogin', 'uses' => 'LoginController@getLogin']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'LoginController@getLogout']);

// Route::get('dashboard', ['as' => 'dashboard', 'middleware' => 'auth', function(){
// 	return view('admin.dashboard.main');
// }]);

Route::group(['middleware' => ['auth']], function () {
    Route::group(["prefix" => 'admin', "namespace" => "admin"], function(){
		Route::get('/', function(){
			return view('admin.module.dashboard.main');
		});

		Route::group(["prefix" => "category"], function(){
			Route::get('add', ['as' => 'addCategory', 'uses' => 'CategoryController@getAdd']);
		});
    });
});