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
		
		return count($param) > 0 ? self::select($param)->get() : self::get();
		
	}
}
