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

	/**
	 * 获取标签下所有案例
	 * @param $tid 标签id
	 * 
	 * @return array
	 */
	static public function getDataByTagId($tid){
		return DB::select("select * from cases where find_in_set('$tid',tag_ids)");
	}
	
	
	
}
