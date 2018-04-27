<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Product;
use App\Http\Database\Product_Category;
use App\Http\Database\Manual;
use App\Http\Database\Product_Manual_Relationship;


use Redirect, Input, Auth, Session, DB;

class ServiceController extends Controller {

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
		
		return view('client/service-list', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getDetail($id)
	{
		
		
	}
	
	public function getTestmachine(Request $request){
		return view('client/service-testmachine', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getGuide(Request $request){
		return view('client/service-guide', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getManual(Request $request){
		return view('client/service-manual', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getCatalog(Request $request){
		return view('client/service-catalog', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getSettings(Request $request){
		return view('client/service-settings', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getVersionhistory(Request $request){
		return view('client/service-versionhistory', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getOthers(Request $request){
		return view('client/service-others', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getDelivery(Request $request){
		return view('client/delivery', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getFaq(Request $request){
		return view('client/faq', [
			'nav'											=> $this->nav
		]);
	}
}
