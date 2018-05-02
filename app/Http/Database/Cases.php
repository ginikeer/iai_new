<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use DB;

class Cases extends Model {
	protected $table = 'cases';
	
	protected $guarded  = ["id"];
	
	
	/**
	 * 获取某个分类下所有案例
	 * @param $cid 分类id
	 * 
	 * @return array
	 */
	static public function getDataByCategoryId($cid) {
		
		return self::where('category', $cid)->orderBy('id', 'desc')->get();
		
	}
	
	
}
