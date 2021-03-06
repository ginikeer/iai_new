<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

class Manual extends Model {
	protected $table = 'manual';
	
	protected $guarded  = ["id"];
	
	/**
	 * 获取全部产品使用说明
	 *
	 * @return array
	 */
	static public function getAll($param = array()) {
		
		return count($param) > 0 ? self::select($param)->orderBy('id', 'desc')->get() : self::orderBy('id', 'desc')->get();
		
	}
	
	/**
	 * 根据分类获取数据
	 *
	 * @return array
	 */
	static public function getDataByCategory($category) {
		
		return self::where('category', $category)->get();
		
	}


	/**
	 *根据关键字获取使用说明
	 *
	 *@return array
	 */
	static public function getManuListByKeys($keywords = ''){
		return self::where('title','like','%' . $keywords . '%')->select(array('id','title'))->get();
	}
}
