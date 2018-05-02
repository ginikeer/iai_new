<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use App\Http\Database\Cases;

use DB;

class Product extends Model {
	protected $table = 'product';
	
	protected $guarded  = ["id"];
	
	
	/**
	 * 获取最新的n个新产品
	 * @param $n 个数
	 * 
	 * @return array
	 */
	static public function getNew($n) {
		
		return self::where('is_new', 1)->orderBy('id', 'desc')->take($n)->get();
		
	}
	
	/**
	 * 获取某个分类下所有产品
	 * @param $alias 分类别名
	 * 
	 * @return array
	 */
	static public function getDataByCategoryAlias($alias) {
		
		return DB::table('product as p')->leftJoin('product_category as c', 'c.id', '=', 'p.category')
				->where('c.alias', $alias)
				->orderBy('p.id', 'desc')
				->select('p.*')
				->get();
		
	}
	
	/**
	 * 根据关键字获取产品列表
	 * @param $keyword 关键字
	 * 
	 * @return array
	 */
	static public function getDataBySearch($keyword) {
		
		return self::where('title', 'like', '%' . $keyword . '%')
					->orWhere('description', 'like', '%' . $keyword . '%')
					->orderBy('id', 'desc')->get();
		
	}
	
	/**
	 * 获取某个分类下所有产品
	 * @param $cid 分类id
	 * 
	 * @return array
	 */
	static public function getDataByCategoryId($cid) {
		
		return self::where('category', $cid)->orderBy('id', 'desc')->get();
		
	}
	
	/**
	 * 获取单个产品某个分类下相关产品
	 * @param $pid 产品id
	 * @param $cid 分类id
	 * @param $type 返回类型
	 * 
	 * @return strng 逗号连接的字符串
	 * 或者
	 * @return array 数组
	 */
	static public function getRelatedByCategoryId($pid, $cid, $select, $type) {
		
		$res													= array();
		$related 												= self::where('id', $pid)->pluck('related_product_ids');
		
		if( !empty($related) ) {
			
			$related_arr 										= explode(',', $related);
			$res 												= self::where('category', $cid)->whereIn('id', $related_arr)
																		->orderBy('id', 'desc')->lists($select);
			
			return 	$type == 'string' ? implode('，', $res) : $res;												
			
		} else {
			
			return $type == 'string' ? '' : $res;
			
		}
	}
	
	/**
	 * 获取单个产品某个分类下相关案例
	 * @param $pid 产品id
	 * @param $cid 分类id
	 * @param $type 返回类型
	 * 
	 * @return strng 逗号连接的字符串
	 * 或者
	 * @return array 数组
	 */
	static public function getCaseByCategoryId($pid, $cid, $select, $type) {
		
		$res													= array();
		$related 												= self::where('id', $pid)->pluck('related_case_ids');
		
		if( !empty($related) ) {
			
			$related_arr 										= explode(',', $related);
			$res 												= Cases::where('category', $cid)->whereIn('id', $related_arr)
																		->orderBy('id', 'desc')->lists($select);
			
			return 	$type == 'string' ? implode('，', $res) : $res;												
			
		} else {
			
			return $type == 'string' ? '' : $res;
			
		}
	}
	
	/**
	 * 获取单个产品的关联产品数据
	 * @param $id 产品id
	 * 
	 * @return array
	 */
	static public function getRelatedProduct($id) {
		
		$res													= array();
		$related												= self::where('id', $id)->pluck('related_product_ids');
		
		if( !empty($related) ) {
			
			$related_arr										= explode(',', $related);											
			$res												= self::whereIn('id', $related_arr)
																		->orderBy('id', 'desc')->get();
		}
		
		return $res;
	}
	
	/**
	 * 获取单个产品的相关案例数据
	 * @param $id 产品id
	 * 
	 * @return array
	 */
	static public function getRelatedCase($id) {
		
		$res													= array();
		$related												= self::where('id', $id)->pluck('related_case_ids');
		
		if( !empty($related) ) {
			
			$related_arr										= explode(',', $related);											
			$res												= Cases::whereIn('id', $related_arr)
																		->orderBy('id', 'desc')->get();
		}
		
		return $res;
	}
	
}
