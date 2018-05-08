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
Route::get('ECRequire', 'Client\EcRequireController@index');
Route::get('ECRequire/rod', 'Client\EcRequireRodController@index');
Route::get('ECRequire/slider', 'Client\EcRequireSliderController@index');
Route::get('ECRequire/time', 'Client\EcRequireTimeController@index');
Route::get('ECRequire/life', 'Client\EcRequireLifeController@index');
Route::get('ECRequire/pressingSmall', 'Client\EcRequirePressingSmallController@index');
Route::get('ECRequire/loadSmall', 'Client\EcRequireLoadSmallController@index');
Route::get('ECRequire/cycleTimeSmall', 'Client\EcRequireCycleTimeSmallController@index');
Route::get('ECRequire/cycleTimeRod', 'Client\EcRequireCycleTimeRodController@index');
Route::get('ECRequire/loadRodLinerGuide', 'Client\EcRequireLoadRodLinerGuideController@index');
Route::get('ECRequire/loadRod', 'Client\EcRequireLoadRodController@index');
Route::get('ECType', 'Client\EcTypeController@index');
Route::get('ECSpec', 'Client\EcSpecController@index');
Route::get('ECSpec/sub', 'Client\EcSpecSubController@index');
Route::get('ECPeripheral', 'Client\EcPeripheralController@index');

Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
