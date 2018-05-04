<?php namespace App\Services;

use App\Services\Helper;
	
use Cookie, DB;

	
class Users {
	
	static protected $prov 						= [ '上海市', '北京市', '重庆市', '天津市', '浙江省', '江苏省', '江西省', '湖北省', '安徽省',
													'河南省', '河北省', '山西省', '山东省', '广东省', '海南省', '湖南省', '福建省', '吉林省',
													'黑龙江省', '辽宁省', '甘肃省', '青海省', '陕西省', '四川省', '云南省', '贵州省', '内蒙古自治区',
													'新疆维吾尔自治区', '宁夏回族自治区', '西藏自治区' ];
	
	
	
	static public function getProv()
	{
		return self::$prov;
	}
	
	static public function getProvOption() 
	{
		$html									= '';
		
		foreach(self::$prov as $p) {
			$html 								.= '<option value="' . $p . '">' . $p . '</option>';
		}
		
		echo $html;
	}
	
}