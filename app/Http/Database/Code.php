<?php 
namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use DB;

class Code extends Model {
	protected $table = 'code';
	
	protected $guarded  = ["id"];
	
	static public function getPageList(){
		return self::orderBy('created_at','desc')->paginate(2);
	}

	/**
	 *根据id 获得单个faq信息
	 *
	 *return object
	 */
	static public function getCodeById($id){

		if(empty($id))return false;

		return self::find($id);
	}





}