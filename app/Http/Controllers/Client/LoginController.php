<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Product;
use App\Http\Database\Product_Category;
use App\Http\Database\Manual;
use App\Http\Database\Product_Manual_Relationship;


use Redirect, Input, Auth, Session, DB;

class LoginController extends Controller {

	public $nav;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->nav											= 'login';
	}

	
	
	public function getDetail($id)
	{
		
		
	}
	
	
	
	public function getPwdlost(Request $request)
	{
		
		return view('client/pwd-lost-input', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getPwdlostpost(Request $request)
	{
		
		return view('client/pwd-lost-post', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getMypage(Request $request)
	{
		
		return view('client/mypage', [
			'nav'											=> $this->nav
		]);
	}

}
