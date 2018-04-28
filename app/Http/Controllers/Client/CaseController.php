<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Cases;
use App\Http\Database\Product_Category;


use Redirect, Input, Auth, Session, DB;

class CaseController extends Controller {

	public $nav;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->nav											= 'case';
	}

	public function getIndex(Request $request)
	{
		
		return view('client/case-list', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getDetail(Request $request)
	{
		return view('client/case-detail', [
			'nav'											=> $this->nav
		]);
		
	}
	
	
	
	

}
