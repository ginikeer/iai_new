<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Helper;

use App\Http\Database\Cases;
use App\Http\Database\Product_Category;
use App\Http\Database\Case_logo;
use App\Http\Database\Case_tag;
use App\Http\Database\Case_icon;


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
			$data[$i]->primary_tag							= Case_tag::getIdByType( $selected_tag['arr_ids'], '行业' );
		}
		
		return view('client/case-list', [
			'nav'											=> $this->nav,
			'tag'											=> Case_tag::getDataByType('行业'),
			'case'											=> $data
		]);
	}
	
	public function getDetail($id)
	{
		$case												= Cases::where('id', $id)->first();
		$tag_ids											= explode( ",", $case->tag_ids );
		$icon_ids											= explode( ",", $case->icon_ids );
		
		return view('client/case-detail', [
			'nav'											=> $this->nav,
			'case'											=> $case,
			'tags'											=> Case_tag::getTitleAndType($tag_ids),
			'logo'											=> Case_logo::getImageName($case->logo),
			'sub_title'										=> Helper::explodeBynewline($case->sub_title),
			'icons'											=> Case_icon::getImageName($icon_ids)
		]);
		
	}
	
	
	
	

}
