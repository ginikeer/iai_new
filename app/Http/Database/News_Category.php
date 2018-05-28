<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

class News_Category extends Model {
	protected $table = 'news_category';
	
	protected $guarded  = ["id"];
	
	/**
	 * 获取全部新闻分类
	 *
	 * @return array
	 */
	static public function getAll($param = array()) {
		
		return count($param) > 0 ? self::select($param)->orderBy('sorting', 'asc')->get() : self::orderBy('sorting', 'asc')->get();
		
	}
	
	/**
	 * 根据id获取分类名称
	 *
	 * @return string
	 */
	static public function getTitleById($id) {
		
		return self::where('id', $id)->pluck('title');
		
	}
}
