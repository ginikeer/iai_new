<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model {
	protected $table = 'product_category';
	
	protected $guarded  = ["id"];
	
	/**
	 * 获取全部产品分类
	 *
	 * @return array
	 */
	static public function getAll() {
		
		return self::orderBy('sorting', 'asc')->get();
		
	}
	
	/**
	 * 获取第一个产品分类别名
	 *
	 * @return string
	 */
	static public function getFirstAlias() {
		
		return self::orderBy('sorting', 'asc')->take(1)->pluck('alias');
		
	}
	
	/**
	 * 获取第一个产品分类id
	 *
	 * @return string
	 */
	static public function getFirstId() {
		
		return self::orderBy('sorting', 'asc')->take(1)->pluck('id');
		
	}
	
	/**
	 * 根据id获取产品分类名称
	 *
	 * @return string
	 */
	static public function getTitleById($id) {
		
		return self::where('id', $id)->pluck('title');
		
	}
}
