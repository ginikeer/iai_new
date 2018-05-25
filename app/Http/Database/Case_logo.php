<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use DB;

class Case_logo extends Model {
	protected $table = 'case_logo';
	
	protected $guarded  = ["id"];
	
	/**
	 * 获取全部logo
	 *
	 * @return array
	 */
	static public function getAll($param = array()) {
		
		return count($param) > 0 ? self::select($param)->orderBy('id', 'asc')->get() : self::orderBy('id', 'asc')->get();
		
	}
	
	/**
	 * 根据id获取logo的图片名
	 *
	 * @return array
	 */
	static public function getImageName($id) {
		
		return self::where('id', $id)->pluck('image_name');
		
	}
}
