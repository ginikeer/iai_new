<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Manual;
use App\Http\Database\Manual_Category;
use App\Http\Database\User;
use App\Http\Database\Catalog_Apply;
use App\Http\Database\User_Admin;

use App\Services\Helper;

use Redirect, Input, Auth, Session, DB, Cookie, Mail;

class LoginController extends Controller {

	public $nav;
	public $uid;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('client');
		$this->nav											= 'admin-login';
		$this->uid											= Cookie::get("iai_user_token");
	}

	public function getIndex(Request $request)
	{
		return view('client/admin-login', [
			'nav'											=> $this->nav
		]);
	}

	//登录提交
	public function postUpdate(Request $request)
	{
		$username 											= $request->input('username');
		$password 											= $request->input('password');
		$user												= User_Admin::hasData($username, $password);
		if( count($user) ) {
			Helper::setSession($user);	
			return redirect('/admin');
		} else {
			return view('client/admin-login', ['error' => '验证失败，账号或密码错误！']);
		}
	}
	
	//登出
	public function getLogout(){
		Helper::clearSession();
		return redirect('/login');
	}

	
}
