<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use DB;

class User extends Model {
	protected $table = 'users';
	
	protected $guarded  = ["id"];
	
	/**
	 * 检查该账户是否存在
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
	

	
}
