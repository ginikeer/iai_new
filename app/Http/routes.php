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
Route::controller('/product', 'Client\ProductController');
Route::controller('/case', 'Client\CaseController');

Route::get('/admin', 'Admin\ProductController@getIndex');
Route::controller('/admin/product', 'Admin\ProductController');
Route::controller('/admin/manual', 'Admin\ManualController');
Route::controller('/admin/case', 'Admin\CaseController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
