<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use App\Services\Helper;

use DB;

class User extends Model {
	protected $table = 'users';
	
	protected $guarded  = ["id"];
	
	/**
	 * 获取某个账户的数据
	 *
	 * @return array
	 */
	static public function hasData($email, $password) {
		
		return self::where('email', $email)
					->where('pwd', $password)
					->first();
		
	}
	
	/**
	 * 检查该账户是否有效
	 *
	 * @return boolean
	 */
	static public function isVaild($id) {
		
		$status = self::where('id', $id)->pluck('status');
		
		return ($status != USER_IS_DELETED);
		
	}
	
	/**
	 * 检查某字段的值是否已存在
	 *
	 * @return int
	 */
	static public function isExist($key, $value) {
		
		return self::where($key, $value)->count();
		
	}
	
	/**
	 * 生成未认证的账户
	 *
	 * @return void
	 */
	static public function genAccount($email, $key) {
		
		$pwd												= Helper::genCode();
		
		if( !self::isExist('email', $email) && !self::isExist('reg_key', $key) ) {
			
			self::insert([
				'email'										=> $email,
				'pwd'										=> $pwd,
				'reg_key'									=> $key,
				'status'									=> USER_INFO_NOT_COMPLETED,
				'created_at'								=> date('Y-m-d H:i:s')
			]);
			
			return true;
			
		} else {
			
			return false;
			
		}
		
	}
	
	/**
	 * 根据key获取email
	 *
	 * @return string
	 */
	static public function getEmailByKey($key) {
		
		return self::where('reg_key', $key)->pluck('email');
		
	}
	
	/**
	 * 根据key和email获取id，主要是验证key和email是否一致
	 *
	 * @return int
	 */
	static public function getIdByKeyAndEmail($key, $email) {
		
		return self::where('reg_key', $key)->where('email', $email)->pluck('id');
		
	}
	
}
