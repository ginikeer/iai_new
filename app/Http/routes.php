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
Route::controller('/service', 'Client\ServiceController');
Route::controller('/news', 'Client\NewsController');
Route::controller('/contact', 'Client\ContactController');
Route::controller('/company', 'Client\CompanyController');
Route::controller('/member', 'Client\MemberController');

Route::get('/admin', 'Admin\ProductController@getIndex');
Route::controller('/admin/product', 'Admin\ProductController');
Route::controller('/admin/manual', 'Admin\ManualController');
Route::controller('/admin/case', 'Admin\CaseController');
Route::controller('/admin/user', 'Admin\UserController');
Route::controller('/admin/news', 'Admin\NewsController');
Route::controller('/admin/faq', 'Admin\FaqController');


Route::controllers([
	'auth' => 'Auth\ClientAuthController',
	'password' => 'Auth\PasswordController',
]);
