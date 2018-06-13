<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model {
	protected $table = 'faq';
	
	protected $guarded  = ["id"];
	
	/**
	 * 获取全部Faq
	 *
	 * @return array
	 */
	static public function getAll($param = array()) {
		
		return count($param) > 0 ? self::select($param)->orderBy('sorting', 'asc')->get() : self::orderBy('sorting', 'asc')->get();
		
	}
	
	
}
