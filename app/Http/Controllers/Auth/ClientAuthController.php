<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\Services\Helper;
use App\Services\Users;
use App\Http\Database\User;
use App\Lib\AliyunSms;

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
		$account 											= $request->input('account');
		$password 											= $request->input('password');
		$user												= User::hasData($account, $password);
		if( count($user) ) {	//有该用户，信息存入cookie
			if( User::isVaild($user->id) ) {	//用户有效
				Cookie::queue('iai_user_token', $user->id, 60 * 24 * 7);
				if( Session::has('page_before_login') ) {
					return redirect(Session::get('page_before_login'));
				} else {
					return redirect('/member/info');
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
	
	//忘记密码页面
	public function getForget()
	{
		return view('client/forget-password');
	}
	
	//邮件方式请求重置密码
	public function postForgetEmail(Request $request)
	{
		$email												= $request->input('email');
		$key												= Helper::generateUnique();
		
		if( User::isExist('email', $email) ) {
			//修改key值
			User::updateKeyByField('email', $email, $key);
			
			try {
				$url										= url('/auth/reset?key=' . $key);
				
				//发送邮件
				Mail::send('emails.forget', ['email' => $email, 'url' => $url], function($message) use ($email) {
				    $message->to($email)->subject('艾卫艾商贸(上海)有限公司- 找回密码');
				});
				
				echo 'ok';
			} catch (\Exception $e) {
				echo '邮件发送失败！';
			}
			
		} else {
			echo '该邮箱不存在！';
		}
	}
	
	//手机方式请求重置密码
	public function postForgetMobile(Request $request)
	{
		$mobile												= $request->input('mobile');
		$vcode												= $request->input('vcode');
		$current 											= date('Y-m-d H:i:s');
		$key												= Helper::generateUnique();
		
		if( !User::isExist('tel', $mobile) ) {
			
			echo json_encode(array('code' => -1, 'msg' => '该手机号不存在！'));
			die();
			
		} else if( !(Session::get('reg_mobile') == $mobile && Session::get('reg_vcode') == $vcode && 
						Session::get('reg_vcode_expired_at') >= $current) ) {
			
			echo json_encode(array('code' => -1, 'msg' => '验证码错误或已超时！'));
			die();
			
		} else {
			
			//修改key值
			User::updateKeyByField('tel', $mobile, $key);
			
			$url											= url('/auth/reset?key=' . $key);
			echo json_encode(array('code' => 1, 'msg' => $url));
			
		}
	}
	
	//重置密码页面
	public function getReset(Request $request)
	{
		$key												= $request->input('key');
		$reg_method											= User::getFieldByKey($key, 'reg_method');
		$email												= '';
		$mobile												= '';
		
		if($reg_method == 'email') {
			$email											= User::getFieldByKey($key, 'email');
		} else if($reg_method == 'mobile') {
			$mobile											= User::getFieldByKey($key, 'tel');
		}
		
		if( empty($reg_method) || empty($key) || ($reg_method == 'email' && empty($email)) || 
				($reg_method == 'mobile' && empty($mobile)) ) {	//key或者邮箱为空说明不是从邮箱过来的，或者修改了key值
			return redirect('/auth/register');
		} else {
			return view('client/forget-reset', [
				'email' 									=> $email,
				'mobile'									=> $mobile,
				'reg_method'								=> $reg_method,
				'key' 										=> $key
			]);
		}
	}
	
	//重置密码提交
	public function postReset(Request $request)
	{
		$key												= $request->input('reg_key');
		$password											= $request->input('password');
		
		User::updatePasswordByKey($password, $key);
		
		return redirect('/auth/reset-complete');
	}
	
	public function getResetComplete()
	{
		return view('client/forget-reset-complete');
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
			if( ! User::genAccountByEmailReg($email, $key) ) {
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
	
	//检查手机号是否存在，生成验证码，发送短信
	public function postSendVcode(Request $request)
	{
		$mobile												= $request->input('mobile');
		$scene												= $request->input('scene');
		
		if($scene == 'register') {	//注册场景
			if( User::isExist('tel', $mobile) ) {
				echo json_encode(array('Code' => 'error', 'Message' => '该手机号已存在，请换个手机号或者前往登陆！'));
				die();
			}
		} else if($scene == 'forget') {		//忘记密码场景
			if( !User::isExist('tel', $mobile) ) {
				echo json_encode(array('Code' => 'error', 'Message' => '手机号不存在！'));
				die();
			}
		}
		
		$expired_at 										= date('Y-m-d H:i:s', strtotime("+15 minute"));
		$code												= Helper::genCode(4);
		$sms 												= new AliyunSms(ALIYUN_SMS_KEY, ALIYUN_SMS_SECRET);
		
		$response 											= $sms->sendSms(
		    ALIYUN_SMS_SIGN, 			// 短信签名
		    ALIYUN_SMS_TEMPLATE_CODE, 	// 短信模板编号
		    $mobile, 					// 短信接收者
		    Array("code" => $code),  	// 短信模板中字段的值
		    ""							// 流水号
		);
		
		if($response->Code == 'OK') {	//正确发送验证码
			Session::put('reg_mobile', $mobile);
			Session::put('reg_vcode', $code);
			Session::put('reg_vcode_expired_at', $expired_at);
		}
		
		$response->temp = $code;
		
		echo json_encode($response);
	}
	
	//检查手机号是否存在，验证码是否正确，生成临时用户
	public function postCheckMobile(Request $request)
	{
		$mobile												= $request->input('mobile');
		$vcode												= $request->input('vcode');
		$current 											= date('Y-m-d H:i:s');
		$key												= Helper::generateUnique();
		
		if( User::isExist('tel', $mobile) ) {
			
			echo json_encode(array('code' => -1, 'msg' => '该手机号已存在，请换个手机号或者前往登陆！'));
			die();
			
		} else if( !(Session::get('reg_mobile') == $mobile && Session::get('reg_vcode') == $vcode && 
						Session::get('reg_vcode_expired_at') >= $current) ) {
			
			echo json_encode(array('code' => -1, 'msg' => '验证码错误或已超时！'));
			die();
			
		} else {
			
			//生成未认证的账户
			if( ! User::genAccountByMobileReg($mobile, $key) ) {
				echo json_encode(array('code' => -1, 'msg' => '网络错误，请稍后重试！'));
				die();
			}
			
			$url											= url('/auth/input?key=' . $key);
			
			echo json_encode(array('code' => 1, 'msg' => $url));
		}
	}
	
	//注册信息填写页面
	public function getInput(Request $request)
	{
		$key												= $request->input('key');
		$reg_method											= User::getFieldByKey($key, 'reg_method');
		$email												= '';
		$mobile												= '';
		
		if($reg_method == 'email') {
			$email											= User::getFieldByKey($key, 'email');
		} else if($reg_method == 'mobile') {
			$mobile											= User::getFieldByKey($key, 'tel');
		}
		
		if( empty($reg_method) || empty($key) || ($reg_method == 'email' && empty($email)) || 
				($reg_method == 'mobile' && empty($mobile)) ) {	//key或者邮箱为空说明不是从邮箱过来的，或者修改了key值
			return redirect('/auth/register');
		} else {
			return view('client/register-input', [
				'email' 									=> $email,
				'mobile'									=> $mobile,
				'reg_method'								=> $reg_method,
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
		$id													= User::getIdByKey($key);
		
		if(empty($id))	return redirect('auth/register');
		
		$data 												= User::find($id);
		$param												= Helper::removeFromAll(['_token', 'reg_key'], $request->all());
		
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
