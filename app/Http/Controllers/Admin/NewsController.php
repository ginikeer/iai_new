<?php namespace App\Http\Controllers\Admin;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Helper;

use App\Http\Database\News;
use App\Http\Database\News_Category;

use Redirect, Input, Auth, Session, DB;

class NewsController extends Controller {

	public $category;
	
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
//		$this->middleware('auth');
		$this->category 									= News_Category::getAll();
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getList()
	{
		$data 												= News::orderBy('id', 'desc')->paginate(PER);
		
		for($i = 0; $i < count($data); $i++) {
			$data[$i]->category								= News_Category::getTitleById($data[$i]->category);
		}
		
		return view('admin/news-list', ['data' => $data]);
	}
	
	public function getSingle(Request $request)
	{
		$id 												= $request->input('id', '');
		
		if(empty($id)) {	//新增
			$news											= array();
		} else {	//编辑
			$news											= News::where('id', $id)->first();
		}
		
		return view('admin/news-single', [
			'news'											=> $news,
			'category' 										=> $this->category
		]);
	}
	
	public function postSave(Request $request)
	{
		$id 												= $request->input('id', '');
		$data 												= empty($id) ? new News : News::find($id);
		$data->title										= $request->input('title');
		$data->cover_image_name								= $request->input('cover_image_name');
		$data->abstract										= $request->input('abstract');
		$data->category										= $request->input('category');
		$data->pdf_name										= $request->input('pdf_name');
		$data->content										= $request->input('content');
		$data->save();
		
		return Redirect::to(Helper::genUrl('admin/news/single', $id));
	}
	
	public function postUpload(Request $request)
	{
		$res 												= Helper::uploadFile($request, 'news_img');
		$res["img_full_path"]								= $res["code"] ? NEWS_IMG_PATH . $res["message"] : '';
		
		echo json_encode($res);
	}
	
	public function postPdfUpload(Request $request)
	{
		$res 												= Helper::uploadFile($request, 'news_pdf');
		
		echo json_encode($res);
	}
	
	public function postDel(Request $request)
	{
		try {
			News::where('id', $request->input('id'))->delete();
			
			echo "ok";
		} catch (\Exception $e) {
			print_r($e); 
		}
	}
	
	
}
