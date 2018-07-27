<?php namespace App\Http\Controllers\Admin;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Helper;

use App\Http\Database\Product;
use App\Http\Database\Product_Category;
use App\Http\Database\Manual;
use App\Http\Database\Product_Manual_Relationship;
use App\Http\Database\Cases;
use App\Http\Database\Case_tag;

use Redirect, Input, Auth, Session, DB;

class ProductController extends Controller {

	public $category;
	
	
	public function __construct()
	{
//		$this->middleware('auth');
		$this->middleware('admin');

		$this->category 									= Product_Category::getAll();
		$this->tag											= Case_tag::getAll();
	}

	public function getIndex()
	{
		return Redirect::to('admin/product/list');
	}
	
	public function getList()
	{
		$data 												= Product::orderBy('id', 'desc')->paginate(PER);
		
		for($i = 0; $i < count($data); $i++) {
			$data[$i]->category 							= Product_Category::getTitleById($data[$i]->category);
			$data[$i]->is_new 								= $data[$i]->is_new ? "是" : "否";
		}
		
		return view('admin/product-list', ['data' => $data]);
	}
	
	public function getSingle(Request $request)
	{
		// //e10adc3949ba59abbe56e057f20f883e
		// echo md5('oppasswd');exit;
		$id 												= $request->input('id', '');
		$tag											    = $this->tag;
		$category                                           = $this->category;
		$product 											= array();
		$selected_manual									= array();
		$related											= array();
		$cases												= array();
		$related_case										= array();
		
		//获取每个标签下的所有案例信息
		foreach($tag as $c) {                               
			$cases["cid_" . $c->id]							= Cases::getDataByTagId($c->id);
		}



		if(empty($id)) {	//新增
			$selected_manual['titles']						= "";
			$selected_manual['ids']							= array();
			
			foreach($tag as $c) {
				$related_case["cid_" . $c->id]["titles"]	= "";
				$related_case["cid_" . $c->id]["ids"]		= array();
			}
			 
		} else {	//编辑
			$product 										= Product::where('id', $id)->first();
			$pid											= $product->id;
			
			//获取关联的使用说明
			$selected_manual['titles']						= implode('，', Product_Manual_Relationship::getTitle($pid));
			$selected_manual['ids']							= Product_Manual_Relationship::getId($pid);
			foreach($tag as $c) {
				//获取相关案例
				$related_case["cid_" . $c->id]["titles"]	= Product::getCaseByTagId($pid, $c->id, 'title', 'string');
				$related_case["cid_" . $c->id]["ids"]		= Product::getCaseByTagId($pid, $c->id, 'id', 'array');
			}

			// dd($related_case);
			// dd($cases["cid_2"]);
		}
		
		return view('admin/product-single', [
			'category' 										=> $category,
			'tag'                                           => $tag,
			'manual' 										=> Manual::getAll(['id', 'title']),
			'selected_manual'								=> $selected_manual,
			'p' 											=> $product,
			'related'										=> $related,
			'cases'											=> $cases,
			'related_case'									=> $related_case
		]);
	}

	public function postManualListByAjax(Request $request){
		return Manual::getManuListByKeys($request->keywords);
	}
	
	public function postSave(Request $request)
	{
		try {
			DB::transaction(function($request) use ($request) {
				$id 										= $request->input('id');
				$manual_ids									= $request->input('manual_ids');
				$related_ids 								= $request->input('related_ids');
				$case_ids									= $request->input('case_ids');
				
				$data 										= empty($id) ? new Product : Product::find($id);
				$data->title								= $request->input('title');
				$data->description							= Helper::newlineEscape($request->input('description'));
				$data->category								= $request->input('category');
				$data->is_new								= $request->input('is_new');
				$data->cover_image_name						= $request->input('cover_image_name');
				$data->image_name							= $request->input('image_name');
				$data->content								= Helper::newlineEscape($request->input('content'));
				$data->pdf_name								= $request->input('pdf_name');
				// $data->related_product_ids					= $this->handelRelatedIds($related_ids);	//相关产品关联
				$data->tag_id                               = $request->input('tag_id');
				$data->related_case_ids						= $this->handelRelatedIds($case_ids);	//相关案例
				$data->save();
				
				$pid 										= $data->id;	//产品id
				
				//使用说明关联
				$mids 										= empty($manual_ids) ? array() : explode(',', $manual_ids);
				Product_Manual_Relationship::updateData($pid, $mids);
			});
			
			return Redirect::to(Helper::genUrl('admin/product/single', $request->input('id')));
		} catch (\Exception $e) {
			print_r($e); 
		}
	}
	
	public function postDel(Request $request)
	{
		try {
			DB::transaction(function($request) use ($request) {
				$id 										= $request->input('id');
				
				Product::where('id', $id)->delete();
				
				//
				
			});
			
			echo "ok";
		} catch (\Exception $e) {
			print_r($e); 
		}
	}
	
	public function postUpload(Request $request)
	{
		$res 												= Helper::uploadFile($request);
		$res["img_full_path"]								= $res["code"] ? PRODUCT_IMG_PATH . $res["message"] : '';
		
		echo json_encode($res);
	}
	
	
	//$arr形如：Array ( [0] => 27 [1] => [2] => [3] => 25,23,19 [4] => [5] => [6] => [7] => [8] => [9] => [10] => [11] => [12] => )
	//拼接成字符串
	private function handelRelatedIds($arr) 
	{
		$res												= "";
		
		if(is_array($arr)) {
			foreach($arr as $a) {
				if(empty($a)) continue;
				
				$res .= $a . ',';
			}
		} else {
			$res = $arr . ',';
		}
		
		return substr($res, 0, strlen($res) - 1);
	}
}
