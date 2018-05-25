<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Cases;
use App\Http\Database\Product_Category;
use App\Http\Database\Case_tag;


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
		$data												= Cases::orderBy('id', 'desc')->get();
		
		for($i = 0; $i < count($data); $i++) {
			$selected_tag['arr_ids']						= explode( ",", $data[$i]->tag_ids );
			$data[$i]->tags									= Case_tag::getTitleAndType( $selected_tag['arr_ids'] );
		}
		
		
		return view('client/case-list', [
			'nav'											=> $this->nav,
			'data'											=> $data											
		]);
	}
	
	public function getDetail($id)
	{
		
		
		return view('client/case-detail', [
			'nav'											=> $this->nav,
			''
		]);
		
	}
	
	
	
	

}
