<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

class Manual_Category extends Model {
	protected $table = 'manual_category';
	
	protected $guarded  = ["id"];
	
	/**
	 * 获取全部产品说明分类
	 *
	 * @return array
	 */
	static public function getAll($param = array()) {
		
		return count($param) > 0 ? self::select($param)->orderBy('sorting', 'asc')->get() : self::orderBy('sorting', 'asc')->get();
		
	}
}
