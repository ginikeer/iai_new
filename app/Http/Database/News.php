<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

class News extends Model {
	protected $table = 'news';
	
	protected $guarded  = ["id"];
	
	/**
	 * 获取全部新闻
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
}
