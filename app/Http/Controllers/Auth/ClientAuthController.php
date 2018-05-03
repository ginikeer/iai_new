<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\Services\Users;

use App\Http\Database\User;

use Session, DB, Cookie, Redirect;

class ClientAuthController extends Controller {

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		
	}
	
	public function getLogin(Request $request)
	{
		return view('client/login');
	}
	
	public function postLogin(Request $request)
	{
		$email 												= $request->input('email');
		$password 											= $request->input('password');
		$user												= User::hasData($email, $password);
		
		if( count($user) ) {	//有该用户，信息存入cookie
			if( User::isVaild($user->id) ) {	//用户有效
				Cookie::queue('iai_user_token', $user->id, 60 * 24 * 7);
				
				return Redirect::back();
			} else {	//用户已退会
				return view('client/login', ['error' => '您的账号已退会，请注册新的账号！']);
			}
		} else {	//没有该用户
			return view('client/login', ['error' => '验证失败，账号或密码错误！']);
		}
	}
	
	public function getLogout(Request $request)
	{
		Cookie::queue('iai_user_token', null, -1);
		
		return redirect('/');
	}
	
	public function getForget()
	{
		return view('client/forget-password');
	}
	
	
	
	public function getRegister(Request $request)
	{
		return view('client/regist');
	}
	
	public function postRegister(Request $request)
	{
		$error = DB::transaction(function($request) use ($request) 
		{
			$error = "";
		
			$name = $request->input('reg-name');
			$sex = $request->input('reg-sex');
			$email = $request->input('reg-email');
			$phone = $request->input('reg-phone');
			$vcode = $request->input('reg-verify');
			$province = $request->input('reg-province');
			$city = $request->input('reg-city');
			$products = $request->input('products');
			
			if($vcode != Cookie::get('phonak_vcode')) {	//验证码符合
				$error = "验证码错误或失效！";
			}
			
			if( User::phoneIsExist( $phone ) ) {
				$error = "该手机号已存在！";
			}
			
			if(empty($error)) {
				$uid = DB::table('users')->insertGetId([
					'name' => $name,
					'sex' => $sex,
					'email' => $email,
					'phone' => $phone,
					'province' => $province,
					'city' => $city,
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s')
				]);
				
				User::addProducts($products, $uid);
				
				Cookie::queue('phonak_user_uid', $uid, 60 * 24 * 15);
			}
			
			return $error;
		});
		
		if(empty($error)) {
			return Redirect::to('myphonak/profile');
		} else {
			return Redirect::back()->withInput()->withErrors($error);
		}
	}

}
