<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Helper;
use App\Services\Users;

use App\Http\Database\User;


use Redirect, Input, Auth, Session, DB, Cookie;

class MemberController extends Controller {

	public $uid;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('client');
		
		$this->uid											= Cookie::get("iai_user_token");
	}

	public function getInfo()
	{
		$data												= User::where('id', $this->uid)->first();
		$data->pwd											= Helper::mosaic( $data->pwd );
		
		return view('client/mypage', [
			'data'											=> $data,
			'prov'											=> Users::getProv()
		]);
	}
	
	public function postUpdate(Request $request)
	{
		$param												= Helper::removeFromAll(['_token'], $request->all());
		
		Helper::tableSave(User::find($this->uid), $param);
		
		return Redirect::to('member/info');
	}
	
	public function getPassword()
	{
		return view('client/mypage-password', [
			'email'											=> User::getFieldById($this->uid, 'email')
		]);
	}
	
	public function postPassword(Request $request)
	{
		$email												= $request->input('email');
		$old												= $request->input('old_password');
		$new												= $request->input('new_password');
		$user												= User::hasData($email, $old);
		
		if( count($user) ) {	//旧密码正确
			Helper::tableSave(User::find($this->uid), ["pwd" => $new]);
			
			return Redirect::to('member/info');
		} else {
			$error 											= "旧密码错误 ！";
			
			return view('client/mypage-password', [
				'email'										=> $email,
				'error'										=> $error
			]);
		}
	}
	
	public function getSecession()
	{
		return view('client/secession');
	}
	
	public function postSecession(Request $request)
	{
		$param												= 
		[
			'delete_reason'									=> $request->input('secession'),
			'status'										=> USER_IS_DELETED,
			'deleted_at'									=> date('Y-m-d H:i:s')
		];
		
		Helper::tableSave(User::find($this->uid), $param);
		
		return redirect('/member/secession-over');
	}
	
	public function getSecessionOver()
	{
		Cookie::queue('iai_user_token', null, -1);
		
		return view('client/secession-complete');
	}

}
