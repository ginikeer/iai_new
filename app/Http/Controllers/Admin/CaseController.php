<?php namespace App\Http\Controllers\Admin;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Helper;

use App\Http\Database\Cases;
use App\Http\Database\Product_Category;
use App\Http\Database\Case_logo;

use Redirect, Input, Auth, Session, DB;

class CaseController extends Controller {

	public $category;
	public $logo;
	
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
//		$this->middleware('auth');
		$this->category 									= Product_Category::getAll();
		$this->logo											= Case_logo::getAll();
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getList()
	{
		$data = Cases::orderBy('id', 'desc')->paginate(PER);
		
		return view('admin/case-list', ['data' => $data]);
	}
	
	public function getSingle(Request $request)
	{
		$id 												= $request->input('id', '');
		
		if(empty($id)) {	//新增
			 
		} else {	//编辑
			
		}
		
		return view('admin/case-single', [
			'category' 										=> $this->category,
			'logo'											=> $this->logo,
			
		]);
	}
	
	public function postUpload(Request $request)
	{
		$res 												= Helper::uploadFile($request, 'case_img');
		$res["img_full_path"]								= $res["code"] ? CASE_IMG_PATH . $res["message"] : '';
		
		echo json_encode($res);
	}
	
	public function postVideoUpload(Request $request)
	{
		$res 												= Helper::uploadFile($request, 'case_video');
		
		echo json_encode($res);
	}
	
	public function postDel(Request $request)
	{
		try {
			Cases::where('id', $request->input('id'))->delete();
			
			echo "ok";
		} catch (\Exception $e) {
			print_r($e); 
		}
	}
	
	
}
