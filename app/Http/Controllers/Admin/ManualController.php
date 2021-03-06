<?php namespace App\Http\Controllers\Admin;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Helper;

use App\Http\Database\Product;
use App\Http\Database\Manual;
use App\Http\Database\Manual_Category;

use Redirect, Input, Auth, Session, DB;

class ManualController extends Controller {

	public $category;
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
//		$this->middleware('auth');
		$this->middleware('admin');
		$this->category										= Manual_Category::getAll();
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex(Request $request)
	{
		$title                                              = $request->input('title') ? $request->input('title') : '';
		$category                                           = $request->input('category') ? $request->input('category') : '';
		$data 												= Manual::where(function($query) use ($title){
																if(!empty($title)){
																	$query->where('title', 'like', '%' . $title . '%');
																}
															})
															->where(function($query) use ($category){
																if(!empty($category)){
																	$query->where('category', '=', $category);
																}
															})
															->orderBy('id', 'desc')->paginate(PER);
		
		return view('admin/manual', ['data' => $data, 'category' => $this->category, 'title'=>$title, 'cid'=>$category]);
	}
	
	public function postUpload(Request $request)
	{
		$res 												= Helper::uploadFile($request, 'manual_pdf');
		
		echo (json_encode($res));
	}
	
	public function postSave(Request $request)
	{
		try {
			$this->save($request);
			
			return Redirect::to('admin/manual');
		} catch (\Exception $e) {
			print_r($e); 
		}
	}
	
	public function postAjaxSave(Request $request)
	{
		$this->save($request);
		
		echo "ok";
	}
	
	public function postDel(Request $request)
	{
		try {
			Manual::where('id', $request->input('id'))->delete();
			
			echo "ok";
		} catch (\Exception $e) {
			print_r($e); 
		}
	}
	
	private function save($request) 
	{
		$id 												= $request->input('id');
		$data 												= empty($id) ? new Manual : Manual::find($id);
		$data->title 										= $request->input('title');
		$data->category 									= $request->input('category');
		$data->cn_pdf_name									= $request->input('cn_pdf_name');
		$data->en_pdf_name									= $request->input('en_pdf_name');
		$data->ja_pdf_name									= $request->input('ja_pdf_name');
		
		$data->save();
	}
	
}
