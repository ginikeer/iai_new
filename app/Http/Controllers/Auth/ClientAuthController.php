<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\Services\User;

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
		$phone = $request->input('reg-tel');
		$vcode = $request->input('reg-vcode');
		$now = strtotime('now');
		
		$user = DB::table('users')
			->where('phone', $phone)
			->where('vcode', $vcode)
			->where('vcode_expired', '>=', $now)
			->first();
		
		if(count($user)) {	//有该用户，信息存入cookie
			Cookie::queue('phonak_user_uid', $user->id, 60 * 24 * 15);
			
			return redirect('myphonak/profile');
		} else {	//没有该用户
			return view('client/myphonak-login', ['error' => '验证失败，请确保您的手机号和验证码正确！', 'nav' => 'User Center']);
		}
	}
	
	public function getLogout(Request $request)
	{
		Cookie::queue('phonak_user_uid', null, -1);
		
		return redirect('myphonak');
	}
	
	public function getRegister(Request $request)
	{
		return view('client/myphonak-register', ['nav' => 'User Center']);
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
