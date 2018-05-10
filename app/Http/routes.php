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

Route::get('/', 'Client\MainController@index');
Route::controller('ECRequire', 'Client\EcRequireController');
Route::controller('EC', 'Client\EcTypeController');
Route::get('ECResemble', 'Client\ECResembleController@index');

Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
