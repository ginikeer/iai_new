<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use DB;

class Faq_Category extends Model {
	protected $table = 'faq_category';
	
	protected $guarded  = ["id"];
	
	const SQL = "
		select 
			third_level.name as third_level_name,
			second_level_parent as third_level_id,
			second_level_name,
			temp.parent as second_level_id,
			temp.id,
			temp.name,
			temp.nameCtgry
		from 
		(
			select
				first_level.*,
				second_level.name as second_level_name,
				second_level.parent as second_level_parent
			from faq_category as first_level
			left join faq_category as second_level on first_level.parent = second_level.id
		) as temp
		left join faq_category as third_level on third_level.id = temp.second_level_parent";
		
	
	/**
	 * 获取全部Faq分类
	 *
	 * @return array
	 */
	static public function getAll() {
		
		$condition = " where third_level.name <> '' and third_level.name is not null order by temp.id";
		
		return DB::select(SELF::SQL . $condition);
		
	}
	
	/**
	 * 根据id获取单个分类
	 *
	 * @return array
	 */
	static public function getDataById($id) {
		
		$condition = " where temp.id = " . $id;
		
		return DB::select(SELF::SQL . $condition);
		
	}
	
	/**
	 * 根据parent获取子分类
	 *
	 * @return array
	 */
	static public function getDataByParent($id) {
		
		return self::where('parent', $id)->get();
		
	}
	
	/**
	 * 根据id获取父分类
	 *
	 * @return array
	 */
	static public function getParentById($id) {
		
		$parent = self::where('id', $id)->pluck('parent');
		return self::where('id', $parent)->get();
		
	}

	/**
	 *
	 */
	static public function getFieldById($id, $field = 'name'){
		return self::where('id', $id)->pluck($field);
	}

	
}
