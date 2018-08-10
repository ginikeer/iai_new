<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreCodePostRequest;
use App\Services\Helper;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Database\Code;

use Excel, Redirect;

class CodeController extends Controller {

	public function __construct(){

	}


	public function getIndex(){
		$codeList                                          = Code::getPageList();
		return view('admin/code-list',array('codeList' => $codeList));
	}

	public function getSingle(Request $request, $id = ''){
		$codeInfo                                          = '';
		if( !empty($id) ){
			$codeInfo                                      = Code::find($id);
		}
		return view('admin/code-single',array('codeInfo' => $codeInfo, 'id' => $id));
	}

	public function postSave(StoreCodePostRequest $request){
		$id                                                = $request->input('id','');
		$obj                                               = !empty($id) ? Code::find($id) : new Code;
		$obj->code                                         = $request->input('code');
		$obj->name                                         = $request->input('name');
		$obj->reason                                       = Helper::newlineEscape($request->input('reason'));
		$obj->pic                                          = $request->input('pic');
		$obj->save();
		return Redirect::to('admin/code/single/' . $id);
	}

	public function postDel(Request $request)
	{
		try {
			Code::where('id', $request->input('id'))->delete();
			
			echo "ok";
		} catch (\Exception $e) {
			print_r($e); 
		}
	}

	public function postUpload(Request $request)
	{
		$res 												= Helper::uploadFile($request, 'code_img', true);
		$res["img_full_path"]								= $res["code"] ? CASE_CODE_PATH . $res["message"] : '';
		
		echo json_encode($res);
	}

	
}