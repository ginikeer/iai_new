<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Product;
use App\Http\Database\Product_Category;
use App\Http\Database\Manual;
use App\Http\Database\Product_Manual_Relationship;


use Redirect, Input, Auth, Session, DB;

class ProductController extends Controller {

	public $nav;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('client');
		$this->nav											= 'product';
	}

	public function getIndex(Request $request)
	{
		$query_category									= $request->input('category');
		
		$default										= !empty($query_category) ? 
			$default = Product::getDataByCategoryAlias($query_category) : Product::getDataByCategoryAlias(Product_Category::getFirstAlias());
		
		return view('client/product-list', [
			'nav'											=> $this->nav,
			'new' 											=> Product::getNew(4),	//获取4个新产品
			'category' 										=> Product_Category::getAll(),
			'default'										=> $default,
			'query_category'								=> $query_category
		]);
	}
	
	public function getDetail($id)
	{
		
		
		return view('client/product-detail', [
			'nav'											=> $this->nav,
			'product'										=> Product::where('id', $id)->first(),
			'manual'										=> Product_Manual_Relationship::getAll($id),
			'related'										=> Product::getRelatedProduct($id),
			'cases'											=> Product::getRelatedCase($id)
		]);
	}
	
	
	public function postDataByCategory(Request $request)
	{
		try {
			$res = array();
		
			$res["code"] 									= 1;
			$res["data"] 									= Product::getDataByCategoryAlias($request->input('category'));
		} catch (\Exception $e) {
			$res["code"] 									= 0;
			$res["data"] 									= $e;
		}
		
		echo json_encode($res);
	}
	
	public function postDataBySearch(Request $request)
	{
		try {
			$res = array();
		
			$res["code"] 									= 1;
			$res["data"] 									= Product::getDataBySearch($request->input('keyword'));
		} catch (\Exception $e) {
			$res["code"] 									= 0;
			$res["data"]									= $e;
		}
		
		echo json_encode($res);
	}
	
	public function getNew(Request $request)
	{
		return view('client/product-l', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getGrs(Request $request)
	{
		return view('client/product-grs', [
			'nav'											=> $this->nav
		]);
	}

}
