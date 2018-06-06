<?php namespace App\Http\Controllers\Admin;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Helper;
use App\Services\Users;

use App\Http\Database\User;
use App\Http\Database\User_Request;


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
	
	public function getApply(Request $request)
	{
		$data 												= $this->conditionApply($request, 2);
		
		return view('admin/user-apply', ['data' => $data]);
	}
	
	public function getApplyState(Request $request)
	{
		User_Request::reverseState($request->input('id'));
		
		return Redirect::to('admin/user/apply');
	}
	
	public function getApplyExcel(Request $request)
	{
		$this->user 										= $this->conditionApply($request, 2, true);
		
		Excel::create("会员目录申请", function($excel) {
		    $excel->sheet('data', function($sheet) {
		    	$sheet->loadView('admin.user-apply-excel', ['data' => $this->user]);
			});
		})->export('xls');
	}
	
	public function getDownload(Request $request)
	{
		$data 												= $this->conditionApply($request, 1);
		
		return view('admin/user-download', ['data' => $data]);
	}
	
	public function getDownloadExcel(Request $request)
	{
		$this->user 										= $this->conditionApply($request, 1, true);
		
		Excel::create("会员下载记录", function($excel) {
		    $excel->sheet('data', function($sheet) {
		    	$sheet->loadView('admin.user-download-excel', ['data' => $this->user]);
			});
		})->export('xls');
	}
	
	
	private function conditionUser($request, $is_excel = false)
	{
		$email												= $request->input('email', '');
		$name												= $request->input('name', '');
		$tel												= $request->input('tel', '');
		$status												= $request->input('status', '');
		
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
	
	private function conditionApply($request, $type, $is_excel = false)
	{
		$state												= $request->input('state', '');
		
		$data												= DB::table('user_request as ur')
																->leftJoin('users as u', 'u.id', '=', 'ur.uid')
																->where('type', $type)
																->select('ur.id', 'ur.created_at', 'u.email', 'u.name', 'u.id as uid', 'ur.content', 'ur.state');
		
		if( !empty($state) ) 
			$data->where('state', $state);
		
		$count												= $data->count();
		
		if(!$is_excel) {
			$data											= $data->orderBy('ur.id', 'desc')->paginate(PER);
			$data->condition_state 							= $state;
			$data->count									= $count;
		} else {
			@set_time_limit(0);
			@ini_set('memory_limit', '1024M');
			$data											= $data->orderBy('ur.id', 'desc')->get();
			
			for($i = 0; $i < count($data); $i++) {
				$data[$i]->email 							= Helper::removeEqual($data[$i]->email);
				$data[$i]->name 							= Helper::removeEqual($data[$i]->name);
				$data[$i]->content 							= Helper::removeEqual($data[$i]->content);
			}
		}
		
		for($i = 0; $i < count($data); $i++) {
			switch ($data[$i]->state) {
				case USER_APPLY_SENT: 
					$data[$i]->state_string 				= USER_APPLY_SENT_STRING;
					break;
				case USER_APPLY_NOT_SENT:
					$data[$i]->state_string 				= USER_APPLY_NOT_SENT_STRING;
					break;
				default :
					break; 
			}
		}
		
		return $data;
	}
	
	
}
