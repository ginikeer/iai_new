<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use DB;

class Case_tag extends Model {
	protected $table = 'case_tag';
	
	protected $guarded  = ["id"];
	
	/**
	 * 获取全部tag
	 *
	 * @return array
	 */
	static public function getAll($param = array()) {
		
		return count($param) > 0 ? self::select($param)->orderBy('id', 'asc')->get() : self::orderBy('id', 'asc')->get();
		
	}
	
	/**
	 * 根据id数组，获取对应的tag标题
	 *
	 * @return array
	 */
	static public function getTitle($arr) {
		
		return self::whereIn('id', $arr)
					->orderBy('id', 'asc')
					->lists('title');
		
	}
	
	/**
	 * 根据id数组，获取对应的tag标题和类型
	 *
	 * @return array
	 */
	static public function getTitleAndType($arr) {
		
		return self::whereIn('id', $arr)
					->orderBy('type', 'desc')
					->orderBy('id', 'asc')
					->select('title', 'type')
					->get();
		
	}
	
	/**
	 * 根据id数组，获取对应的tag的id
	 *
	 * @return string
	 */
	static public function getIdByType($arr, $type) {
		
		return self::whereIn('id', $arr)
					->where('type', $type)
					->pluck('id');
		
	}
	
	/**
	 * 根据type获取数据
	 *
	 * @return array
	 */
	static public function getDataByType($type) {
		
		return self::where('type', $type)
					->orderBy('id', 'asc')
					->get();
		
	}
	
}
