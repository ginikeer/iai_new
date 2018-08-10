<?php namespace App\Services;
	
use App\Http\Database\User_Request;
use App\Http\Database\User;

use Cookie, Storage, File, Session;

//工具类
class Helper {
	
	//根据参数id判断url是否带参
	static public function genUrl($redirect, $id)
	{
		$param 									= empty($id) ? '' : '?id=' . $id;
		
		return $redirect . $param;
	}
	
	//保存数据
	static public function tableSave($data, $param)
	{
		foreach($param as $k => $v) {
			$data->$k = SELF::newlineEscape($v);
		}
		$data->save();
		
		return $data->id;
	}
	
	static public function removeFromAll($remove, $all)
	{
		foreach($remove as $r) {
			unset($all[$r]);
		}
		
		return $all;
	}
	
	//将换行符转义为<br/>
	static public function newlineEscape($str)
	{
		if(stripos($str, "\n") !== false) {
			return str_replace("\n", "<br/>", $str);
		} else {
			return $str;
		}
	}
	
	//将<br/>转义为换行符
	static public function brEscape($str)
	{
		if(stripos($str, "<br/>") !== false) {
			return str_replace("<br/>", "\n", $str);
		} else {
			return $str;
		}
	}
	
	//删除换行
	static public function removeNewline($str)
	{
		if(stripos($str, "\x0d") !== false) {
			return str_replace("\x0d", "", $str);
		} else {
			return $str;
		}
	}
	
	//删除等号
	static public function removeEqual($str)
	{
		if(stripos($str, "=") !== false) {
			return str_replace("=", "", $str);
		} else {
			return $str;
		}
	}
	
	//将字符串根据<br/>分隔成数组
	static public function explodeByNewline($str)
	{
		return explode("<br/>", $str);
	}
	
	//将字符串根据冒号分隔成数组
	static public function explodeByColon($str)
	{
		$arr 									= explode(":", $str);
		
		return isset( $arr[1] ) ? $arr[1] : $arr[0];
	}
	
	//将字符串根据点号分隔成数组，返回点号前面的字符串
	static public function explodeByDot($str)
	{
		$arr 									= explode(".", $str);
		
		return $arr[0];
	}
	
	//随机生成n位数字验证码
	static public function genCode($n = 6)
	{
		$code 									= "";
		
		for($i = 0; $i < $n; $i++) {
			$code .= rand(0, 9);
		}
		
		return $code;
	}
	
	//判断数组中是否至少有一项非空元素
	static public function hasSomething($arr)
	{
		foreach($arr as $a) {
			if($a != "")	return true;
		}
		return false;
	}
	
	//获取最大值
	static public function getMaxIndex($param)
	{
		$max 									= 0;
		
		if(count($param) > 0) {
			foreach($param as $p) {
				if($p->index >= $max) 
					$max = $p->index;
			}
		}
		
		return $max;
	}
	
	//判断传入的$content长度是否大于$length，若是则截断并加上...，否则输出原$content
	static public function truncation($content, $length) 
	{
		$str 									= strip_tags($content);
				
		if(strlen($str) > $length) {
			$str 								= mb_substr($str, 0, $length, 'utf-8') . "...";
		}

		return $str;
	}
	
	static public function mosaic($str, $length = 2)
	{
		$part1									= substr($str, 0, $length);
		$len 									= strlen($str) - 2;
		$mark									= '';
		
		for($i = 0; $i < $len; $i++) {
			$mark								.= '*';
		}
		
		return $part1 . $mark;
	}
	
	
	//将来源不同的文件上传至不同文件夹内
	static public function uploadFile($request, $disk = "", $t = '')
	{
		$res 									= array();
		$file 									= $request->file('file');
		$is_img 								= $request->input('is_img');
		
		$disk 									= empty($disk) ? ($is_img ? "product_img" : "product_pdf") : $disk;
		
		if(!isset($file)) {
			$res["code"] 						= 0;
			$res["message"] 					= "文件过大或者文件错误！！";
			
			return $res;
		}
		
        // 文件是否上传成功
        if ($file->isValid()) {
            // 获取文件相关信息
            $ext 								= $file->getClientOriginalExtension(); //扩展名
            $originalName 						= $file->getClientOriginalName(); //文件原名
            $realPath 							= $file->getRealPath(); //临时文件的绝对路径
            
            // 上传文件
            $filename 							= $is_img ? (date('YmdHis') . uniqid() . $originalName) : $originalName;
            if(!empty($t)){
            	$filename                       = date('YmdHis') . uniqid() . '.' . $ext;
            }

            $bool 								= Storage::disk($disk)->put($filename, file_get_contents($realPath));
            
			if($bool) {
				$res["code"] 					= 1;
				$res["message"] 				= $filename;
			} else {
				$res["code"] 					= 0;
				$res["message"] 				= "上传失败";
			}
   		} else {
   			$res["code"] 						= 0;
			$res["message"] 					= "文件过大或者文件错误！";
  		}
  		
  		return $res;
	}
	
	static public function generateUnique()
	{
		return sha1(time() . rand(0, 9) . rand(0, 99) . rand(0, 999) . rand(0, 9999) . rand(0, 99999));
	}
	
	//记录下载历史并返回PDF文件
	static public function downloadFile($storage, $request)
	{
		$type_arr								= [
			'2017' 								=> '【产品目录2017】',
			'2013' 								=> '【产品目录2013】',
			'micro' 							=> '【产品目录micro】',
			'2008'								=> '【产品目录2008】',
			'manual'							=> '【使用说明书】',
			'history'							=> '【软件版本履历】'
		];
		
		
		if(! Cookie::has("iai_user_token")) {
			return Redirect::to('auth/login');
		} else {
			$uid								= Cookie::get("iai_user_token");
		}
		
		$name									= $request->input('n');
		$lang									= $request->input('l');
		$type									= $request->input('t');
		$ext                                    = $request->input('e');
		$filename								= $name . '.' . $ext;
		$fullpath								= storage_path($storage) . '/' . $filename;
		
		if( File::exists($fullpath) ) {
			$content							= $type_arr[$type] . $name . '(' . $lang . ')';
			
			User_Request::insert([
				'uid'							=> $uid,
				'type'							=> 1,
				'content'						=> $content,
				'state'							=> 1,
				'created_at'					=> date('Y-m-d H:i:s')
			]);
			return response()->download($fullpath, $filename);
		} else {
			abort(404);
		}
	}

	//设置session
	static public function setSession($userInfo){
		Session::put('admin_id',                $userInfo->id);
		Session::put('admin_name',              $userInfo->username);
	}

	//清除session
	static public function clearSession(){
		Session::forget('admin_id');
		Session::forget('admin_name');
	}

	static public function getUserByIAIToken(){
		$user                                               = null;
		if(Cookie::has('iai_user_token')){
			$user                                           = User::getLineValueById(Cookie::get('iai_user_token'));
		}
		return $user;
	}

	static public function uploadImg($file, $dir){
		if($file->isValid()){
			$originalName 								   = $file->getClientOriginalName(); // 文件原名
            $ext                                           = $file->getClientOriginalExtension();     // 扩展名
            $realPath                                      = $file->getRealPath();   //临时文件的绝对路径
            $type                                          = $file->getClientMimeType(); 
            $name                                          = uniqid() . date('YmdHis');
            if(\Storage::put('uploads/' . $dir . '/' . $name . '.' . $ext, file_get_contents($realPath))){
        		$res["code"] 								= 1;
				$res["message"]                 			= '上传成功';
        	} else {
            	$res["code"] 								= 0;
				$res["message"]                 			= '上传失败';
        	}
		} else {
			$res["code"] 									= 0;
			$res["message"]                 				= '上传文件无效';
		}	
		return $res;
	}

	
}

?>