<?php namespace App\Http\Controllers\Admin;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Helper;
use App\Services\Users;

use App\Http\Database\User;


use Redirect, Input, Auth, Session, DB, Validator, Excel;

class UserController extends Controller {

	public $user;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
//		$this->middleware('admin');
		$this->user											= array();
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return Redirect::to('admin/user/list');
	}
	
	public function getList(Request $request)
	{
		$data = $this->conditionUser($request);
		
		return view('admin/user-list', ['data' => $data]);
	}
	
	public function getExcel(Request $request)
	{
		$this->user 										= $this->conditionUser($request, true);
		
		Excel::create("会员列表", function($excel) {
		    $excel->sheet('data', function($sheet) {
		    	$sheet->loadView('admin.user-excel', ['data' => $this->user]);
			});
		})->export('xls');
	}
	
	public function getSingle(Request $request)
	{
		$id 												= $request->input('id', '');
		$prov												= Users::getProv();
		
		if(empty($id)) {	//新增
			$data											= array();
		} else {	//编辑
			$data											= User::where('id', $id)->first();
		}
		
		return view('admin/user-single', ['user' => $data, 'prov' => $prov]);
	}
	
	public function postSave(Request $request)
	{
		$id 												= $request->input('id');
		$data 												= empty($id) ? new User : User::find($id);
		$param												= Helper::removeFromAll(['_token', 'id'], $request->all());
		
		if(empty($id)) {	//新增
			//验证邮箱是否唯一
			$v 												= Validator::make($request->all(), 
																	['email' => 'unique:users'],
																	['email.unique' => '提交失败：邮箱已存在！']);
			if ($v->fails()) {
		        return redirect()->back()->withErrors($v->errors());
		    }
		}
		
		Helper::tableSave($data, $param);
		
		return Redirect::to(Helper::genUrl('admin/user/single', $id));
	}
	
	public function postDel(Request $request)
	{
		try {
			User::where('id', $request->input('id'))->delete();
			
			echo "ok";
		} catch (\Exception $e) {
			print_r($e); 
		}
	}
	
	
	private function conditionUser($request, $is_excel = false)
	{
		$email												= $request->input('email', '');
		$name												= $request->input('name', '');
		$tel												= $request->input('tel', '');
		$status												= $request->input('status', '');
		
		$user 												= array();
		$user												= DB::table('users');
		
		if( !empty($email) ) 
			$user->where('email', 'like', '%' . $email . '%');
		if( !empty($name) ) 
			$user->where('name', 'like', '%' . $name . '%');
		if( !empty($tel) ) 
			$user->where('tel', 'like', '%' . $tel . '%');
		if( $status !== '' ) 
			$user->where('status', $status);
		
		$count												= $user->count();
		
		if(!$is_excel) {
			$user											= $user->orderBy('id', 'desc')->paginate(PER);
			$user->condition_email 							= $email;
			$user->condition_name 							= $name;
			$user->condition_tel 							= $tel;
			$user->condition_status 						= $status;
			$user->count									= $count;
		} else {
			@set_time_limit(0);
			@ini_set('memory_limit', '512M');
			$user											= $user->orderBy('id', 'desc')->get();
			
			for($i = 0; $i < count($user); $i++) {
				$user[$i]->email 							= Helper::removeEqual($user[$i]->email);
				$user[$i]->name 							= Helper::removeEqual($user[$i]->name);
				$user[$i]->company 							= Helper::removeEqual($user[$i]->company);
				$user[$i]->department 						= Helper::removeEqual($user[$i]->department);
			}
		}
		
		for($i = 0; $i < count($user); $i++) {
			switch ($user[$i]->status) {
				case USER_INFO_NOT_COMPLETED: 
					$user[$i]->status_string 				= USER_INFO_NOT_COMPLETED_STRING;
					break;
				case USER_INFO_HAS_COMPLETED:
					$user[$i]->status_string 				= USER_INFO_HAS_COMPLETED_STRING;
					break;
				case USER_IS_DELETED:
					$user[$i]->status_string 				= USER_IS_DELETED_STRING;
					break;
				default :
					break; 
			}
		}
		
		return $user;
	}
	
}
