<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

class Catalog_Apply extends Model {
	protected $table = 'catalog_apply';
	
	protected $guarded  = ["id"];
	
	
	static public function insertData($param)
	{
		$param['created_at']									= date('Y-m-d H:i:s');
		
		self::insert($param);
	}
}
