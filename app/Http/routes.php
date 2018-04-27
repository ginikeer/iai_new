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
Route::controller('/service-testmachine', 'Client\ServiceTestmachineController');
Route::controller('/service-guide', 'Client\ServiceGuideController');
Route::controller('/service-catalog', 'Client\ServiceCatalogController');
Route::controller('/service-settings', 'Client\ServiceSettingsController');
Route::controller('/service-others', 'Client\ServiceOthersController');
Route::controller('/service-versionhistory', 'Client\ServiceVersionhistoryController');
Route::controller('/service-manual', 'Client\ServiceManualController');
Route::controller('/product-late', 'Client\ProductLController');
Route::controller('/news', 'Client\NewsController');
Route::controller('/news-detail', 'Client\NewsDetailController');
Route::controller('/login', 'Client\LoginController');
Route::controller('/forget-password', 'Client\ForgetPasswordController');
Route::controller('/regist', 'Client\RegistController');
Route::controller('/pwd-lost-input', 'Client\PwdLostInputController');
Route::controller('/pwd-lost-post', 'Client\PwdLostPostController');
Route::controller('/pwd-lost-post', 'Client\PwdLostPostController');
Route::controller('/member-complete', 'Client\MemberCompleteController');
Route::controller('/member-info', 'Client\MemberInfoController');
Route::controller('/contact', 'Client\ContactController');

Route::get('/admin', 'Admin\ProductController@getIndex');
Route::controller('/admin/product', 'Admin\ProductController');
Route::controller('/admin/manual', 'Admin\ManualController');
Route::controller('/admin/case', 'Admin\CaseController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
