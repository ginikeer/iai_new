<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Cases;
use App\Http\Database\Product_Category;


use Redirect, Input, Auth, Session, DB;

class CompanyController extends Controller {

	public $nav;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->nav											= 'company';
	}

	public function getIndex(Request $request)
	{
		return view('client/company', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getProfile(Request $request)
	{
		return view('client/profile', [
			'nav'											=> $this->nav
		]);
	}
	
	
	public function getMessage(Request $request)
	{
		return view('client/message', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getHistory(Request $request)
	{
		return view('client/history', [
			'nav'											=> $this->nav
		]);
	}

}
