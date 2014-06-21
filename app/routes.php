<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});

// 登入
Route::post('login', ['uses' => 'HomeController@doLogin']);

// 登出
Route::get('logout', ['uses' => 'HomeController@doLogout']);

// show
Route::get('show', ['uses' => 'HomeController@show']);

// Account
Route::resource('account', 'AccountController');