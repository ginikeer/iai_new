<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\Services\Helper;
use App\Services\Users;

use App\Http\Database\User;

use Session, DB, Cookie, Redirect, Mail;

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
				
				if( Session::has('page_before_login') ) {
					return redirect(Session::get('page_before_login'));
				} else {
					return redirect('/product');
				}
				
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
	
	//注册邮箱填写
	public function getRegister(Request $request)
	{
		return view('client/register-method');
	}
	
	//检查邮箱是否存在，生成临时用户，发送邮件
	public function postCheckEmail(Request $request)
	{
		$email												= $request->input('email');
		$key												= Helper::generateUnique();
		
		if( User::isExist('email', $email) ) {
			echo '该邮箱已经被使用，请换个邮箱！';
		} else {
			//生成未认证的账户
			if( ! User::genAccount($email, $key) ) {
				echo '网络错误，请稍后重试！';
				return;
			}
			
			try {
				$url										= url('/auth/input?key=' . $key);
				
				//发送邮件
				Mail::send('emails.register', ['email' => $email, 'url' => $url], function($message) use ($email) {
				    $message->to($email)->subject('艾卫艾商贸(上海)有限公司- 会员注册邮箱认证');
				});
				
				echo 'ok';
			} catch (\Exception $e) {
				print_r($e);
			}
		}
	}
	
	//注册信息填写页面
	public function getInput(Request $request)
	{
		$key												= $request->input('key');
		$email												= User::getEmailByKey($key);
		
		if(empty($key) || empty($email)) {	//key或者邮箱为空说明不是从邮箱过来的，或者修改了key值
			return redirect('/auth/register');
		} else {
			return view('client/register-input', [
				'email' 									=> $email, 
				'key' 										=> $key,
				'prov'										=> Users::getProv()
			]);
		}
	}
	
	//处理注册逻辑，发送注册成功邮件
	public function postRegister(Request $request)
	{
		$key 												= $request->input('reg_key');
		$email												= $request->input('email');
		$id													= User::getIdByKeyAndEmail($key, $email);
		
		if(empty($id))	return redirect('auth/register');
		
		$data 												= User::find($id);
		$param												= Helper::removeFromAll(['_token', 'reg_key', 'email'], $request->all());
		
		Helper::tableSave($data, $param);
		
		//发送邮件
		Mail::send('emails.register-success', $request->all(), function($message) use ($email) {
		   	$message->to($email)->subject('艾卫艾商贸(上海)有限公司- 会员注册成功');
		});
		
		return redirect('/auth/complete');
	}
	
	//完成注册页面
	public function getComplete()
	{
		return view('client/register-complete');
	}

}
