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

use Redirect, Input, Auth, Session, DB;

class ProductController extends Controller {

	public $category;
	
	
	public function __construct()
	{
//		$this->middleware('auth');
		$this->middleware('admin');

		$this->category 									= Product_Category::getAll();
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
		$id 												= $request->input('id', '');
		$category											= $this->category;
		$product 											= array();
		$selected_manual									= array();
		$related											= array();
		$related_product									= array();
		$cases												= array();
		$related_case										= array();
		
		foreach($category as $c) {
			$related["cid_" . $c->id]						= Product::getDataByCategoryId($c->id);
			$cases["cid_" . $c->id]							= Cases::getDataByCategoryId($c->id);
		}
		
		if(empty($id)) {	//新增
			$selected_manual['titles']						= "";
			$selected_manual['ids']							= array();
			
			foreach($category as $c) {
				$related_product["cid_" . $c->id]["titles"]	= "";
				$related_product["cid_" . $c->id]["ids"]	= array();
				$related_case["cid_" . $c->id]["titles"]	= "";
				$related_case["cid_" . $c->id]["ids"]		= array();
			}
			 
		} else {	//编辑
			$product 										= Product::where('id', $id)->first();
			$pid											= $product->id;
			
			//获取关联的使用说明
			$selected_manual['titles']						= implode('，', Product_Manual_Relationship::getTitle($pid));
			$selected_manual['ids']							= Product_Manual_Relationship::getId($pid);
			
			foreach($category as $c) {
				//获取相关产品
				$related_product["cid_" . $c->id]["titles"]	= Product::getRelatedByCategoryId($id, $c->id, 'title', 'string');
				$related_product["cid_" . $c->id]["ids"]	= Product::getRelatedByCategoryId($id, $c->id, 'id', 'array');
				//获取相关案例
				$related_case["cid_" . $c->id]["titles"]	= Product::getCaseByCategoryId($id, $c->id, 'title', 'string');
				$related_case["cid_" . $c->id]["ids"]		= Product::getCaseByCategoryId($id, $c->id, 'id', 'array');
			}
		}
		
		return view('admin/product-single', [
			'category' 										=> $category,
			'manual' 										=> Manual::getAll(['id', 'title']),
			'selected_manual'								=> $selected_manual,
			'p' 											=> $product,
			'related'										=> $related,
			'related_product' 								=> $related_product,
			'cases'											=> $cases,
			'related_case'									=> $related_case
		]);
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
				$data->related_product_ids					= $this->handelRelatedIds($related_ids);	//相关产品关联
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
