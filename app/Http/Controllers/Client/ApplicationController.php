<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\User;

use App\Services\Helper;

use Redirect, Input, Auth, Session, DB, Cookie;

class ApplicationController extends Controller {

	public $nav;
	public $uid;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('client');
		$this->nav											= 'service';
		$this->uid											= Cookie::get("iai_user_token");
	}


	public function getIndex(Request $request)
	{
	
		return view('client/application', [
			'nav'											=> $this->nav,
			'user'											=> Helper::getUserByIAIToken()
		]);
	}
	
	public function getCheck(Request $request)
	{
		
		return view('client/applicationCheck', [
		]);
	}
	
	public function getComplete(Request $request)
	{
		
		return view('client/applicationComplete', [
		]);
	}
	
}
