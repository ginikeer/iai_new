<?php namespace App\Http\Controllers\Admin;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Helper;

use App\Http\Database\Product;
use App\Http\Database\Manual;

use Redirect, Input, Auth, Session, DB;

class ManualController extends Controller {

	
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
//		$this->middleware('auth');

	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$data = Manual::orderBy('id', 'desc')->paginate(PER);
		
		return view('admin/manual', ['data' => $data]);
	}
	
	public function postUpload(Request $request)
	{
		Helper::uploadFile($request, 'manual_pdf');
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
		$id 								= $request->input('id');
		$data 								= empty($id) ? new Manual : Manual::find($id);
		$data->title 						= $request->input('title');
		$data->cn_pdf_name					= $request->input('cn_pdf_name');
		$data->en_pdf_name					= $request->input('en_pdf_name');
		$data->ja_pdf_name					= $request->input('ja_pdf_name');
		
		$data->save();
	}
	
}
