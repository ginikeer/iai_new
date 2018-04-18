<?php namespace App\Services;

use Cookie, Storage;

	
class Helper {
	
	static public function hasSomething($arr)
	{
		foreach($arr as $a) {
			if($a != "")	return true;
		}
		return false;
	}
	
	static public function getMaxIndex($param)
	{
		$max = 0;
		
		if(count($param) > 0) {
			foreach($param as $p) {
				if($p->index >= $max) 
					$max = $p->index;
			}
		}
		
		return $max;
	}
	
	static public function tableSave($data, $param)
	{
		foreach($param as $k => $v) {
			$data->$k = SELF::newlineEscape($v);
		}
		$data->save();
		
		return $data->id;
	}
	
	//将换行符转义为<br/>
	static public function newlineEscape($str)
	{
		return str_replace("\n", "<br/>", $str);
	}
	
	static public function brEscape($str)
	{
		return str_replace("<br/>", "\n", $str);
	}
	
	static public function removeNewline($str)
	{
		return str_replace("\x0d", "", $str);
	}
	
	//将字符串根据<br/>分隔成数组
	static public function explodeByNewline($str)
	{
		return explode("<br/>", $str);
	}
	
	//将字符串根据冒号分隔成数组
	static public function explodeByColon($str)
	{
		$arr = explode(":", $str);
		
		return isset( $arr[1] ) ? $arr[1] : $arr[0];
	}
	
	//将字符串根据点号分隔成数组，返回点号前面的字符串
	static public function explodeByDot($str)
	{
		$arr = explode(".", $str);
		
		return $arr[0];
	}
	
	//随机生成6位数字
	static public function genCode()
	{
		$code = "";
		
		for($i = 0; $i < 6; $i++) {
			$code .= rand(0, 9);
		}
		
		return $code;
	}
	
	//判断传入的$content长度是否大于$length，若是则截断并加上...，否则输出原$content
	static public function truncation($content, $length) {
		$str = strip_tags($content);
				
		if(strlen($str) > $length) {
			$str = mb_substr($str, 0, $length, 'utf-8') . "...";
		}

		return $str;
	}
	
	static public function uploadFile($request, $disk = "")
	{
		$res 									= array();
		$file 									= $request->file('file');
		$is_img 								= $request->input('is_img');
		
		$disk 									= empty($disk) ? ($is_img ? "product_img" : "product_pdf") : $disk;
		
		if(!isset($file)) {
			$res["code"] 						= 0;
			$res["message"] 					= "文件过大或者文件错误！!";
			
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
	
	
}

?>