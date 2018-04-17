<?php namespace App\Http\Controllers\Admin;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Helper;

use App\Http\Database\Cases;
use App\Http\Database\Product_Category;

use Redirect, Input, Auth, Session, DB;

class CaseController extends Controller {

	
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
		$data = Cases::orderBy('id', 'desc')->paginate(PER);
		
		return view('admin/case-list', ['data' => $data]);
	}
	
	public function postUpload(Request $request)
	{
		Helper::uploadFile($request, 'manual_pdf');
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
