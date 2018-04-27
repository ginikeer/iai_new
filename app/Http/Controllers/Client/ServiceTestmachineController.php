<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Product;
use App\Http\Database\Product_Category;
use App\Http\Database\Manual;
use App\Http\Database\Product_Manual_Relationship;


use Redirect, Input, Auth, Session, DB;

class ServiceTestmachineController extends Controller {

	public $nav;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->nav											= 'service';
	}

	public function getIndex(Request $request)
	{
		
		return view('client/service-testmachine', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getDetail($id)
	{
		
		
	}
	
	
	
	

}
