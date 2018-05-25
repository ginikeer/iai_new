<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use DB;

class Case_icon extends Model {
	protected $table = 'case_icon';
	
	protected $guarded  = ["id"];
	
	/**
	 * 获取全部icon
	 *
	 * @return array
	 */
	static public function getAll($param = array()) {
		
		return count($param) > 0 ? self::select($param)->orderBy('id', 'asc')->get() : self::orderBy('id', 'asc')->get();
		
	}
	
	/**
	 * 根据id数组，获取对应的icon标题
	 *
	 * @return array
	 */
	static public function getTitle($arr) {
		
		return self::whereIn('id', $arr)
					->orderBy('id', 'asc')
					->lists('title');
		
	}
	
	/**
	 * 根据id数组，获取对应的icon图片名
	 *
	 * @return array
	 */
	static public function getImageName($arr) {
		
		return self::whereIn('id', $arr)
					->orderBy('id', 'asc')
					->lists('image_name');
		
	}
	
}
