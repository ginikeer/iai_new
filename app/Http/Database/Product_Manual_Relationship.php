<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use DB;

class Product_Manual_Relationship extends Model {
	protected $table = 'product_manual_relationship';
	
	protected $guarded  = ["id"];
	
	/**
	 * 更新产品的使用说明
	 *
	 * @param	$pid 产品id
	 * @param	$mids 使用说明id数组
	 *
	 * @return	void
	 */
	static public function updateData($pid, $mids) {
		
		DB::transaction(function() use ($pid, $mids) {
			//删除该pid关联的所有mid
			self::where('pid', $pid)->delete();
			
			//重新关联该pid的mid
			if(count($mids) > 0) {
				foreach($mids as $mid) {
					self::insert([
						'pid' 								=> $pid,
						'mid' 								=> $mid,
						'created_at'						=> date('Y-m-d H:i:s')
					]);
				}
			}
			
		});
		
	}
	
	/**
	 * @param	$pid 产品id
	 *
	 * @return	array
	 */
	static public function getTitle($pid) {
		
		return 
			self::where('pid', $pid)
				->leftJoin('manual as m', 'm.id', '=', 'mid')
				->lists('m.title');
		
	}
	
	/**
	 * @param	$pid 产品id
	 *
	 * @return	array
	 */
	static public function getId($pid) {
		
		return 
			self::where('pid', $pid)
				->leftJoin('manual as m', 'm.id', '=', 'mid')
				->select('m.id')
				->lists('m.id');
		
	}
	
	/**
	 * @param	$pid 产品id
	 *
	 * @return	array
	 */
	static public function getAll($pid) {
		
		return 
			self::where('pid', $pid)
				->leftJoin('manual as m', 'm.id', '=', 'mid')
				->select('m.id', 'm.title', 'm.cn_pdf_name', 'm.en_pdf_name', 'm.ja_pdf_name')
				->get();
		
	}
}
