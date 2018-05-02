<?php namespace App\Http\Controllers\Admin;
	
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
		$this->tag											= Case_tag::getAll();
		$this->icon											= Case_icon::getAll();
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getList()
	{
		$data = Cases::orderBy('id', 'desc')->paginate(PER);
		
		for($i = 0; $i < count($data); $i++) {
			$data[$i]['str_tags'] = implode( "，", Case_tag::getTitle( explode(',', $data[$i]['tag_ids']) ) );
		}
		
		return view('admin/case-list', ['data' => $data]);
	}
	
	public function getSingle(Request $request)
	{
		$id 												= $request->input('id', '');
		$case 												= array();
		$selected_tag										= array();
		$selected_icon										= array();
		
		
		if(empty($id)) {	//新增
			$selected_tag['arr_ids']						= array();
			$selected_tag['str_titles']						= "";
			$selected_icon['arr_ids']						= array();
			$selected_icon['str_titles']					= "";
		} else {	//编辑
			$case											= Cases::where('id', $id)->first();
			$selected_tag['arr_ids']						= explode( ",", $case->tag_ids );
			$selected_tag['str_titles']						= implode( "，", Case_tag::getTitle( $selected_tag['arr_ids'] ) );
			$selected_icon['arr_ids']						= explode( ",", $case->icon_ids );
			$selected_icon['str_titles']					= implode( "，", Case_icon::getTitle( $selected_icon['arr_ids'] ) );
		}
		
		
		
		return view('admin/case-single', [
			'case'											=> $case,
			'category' 										=> $this->category,
			'logo'											=> $this->logo,
			'tag'											=> $this->tag,
			'icon'											=> $this->icon,
			'selected_tag'									=> $selected_tag,
			'selected_icon'									=> $selected_icon
		]);
	}
	
	public function postSave(Request $request)
	{
		$id 												= $request->input('id', '');
		$data 												= empty($id) ? new Cases : Cases::find($id);
		$data->title										= $request->input('title');
		$data->category										= $request->input('category');
		$data->tag_ids										= $request->input('tag_ids');
		$data->cover_image_name								= $request->input('cover_image_name');
		$data->description									= Helper::newlineEscape($request->input('description'));
		$data->logo											= $request->input('logo');
		$data->sub_title									= Helper::newlineEscape($request->input('sub_title'));
		$data->video_name									= $request->input('video_name');
		$data->icon_ids										= $request->input('icon_ids');
		$data->content										= $request->input('content');
		$data->save();
		
		return Redirect::to(Helper::genUrl('admin/case/single', $id));
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
