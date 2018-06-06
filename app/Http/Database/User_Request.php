<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

class User_Request extends Model {
	protected $table = 'user_request';
	
	protected $guarded  = ["id"];
	
	/**
	 * 反置状态（如果当前为1则改为0，如果当前为0则改为1）
	 *
	 * @return int
	 */
	static public function reverseState($id)
	{
		
		$old												= self::where('id', $id)->pluck('state');
		$new												= ($old == USER_APPLY_SENT) ? USER_APPLY_NOT_SENT : USER_APPLY_SENT;
		
		self::where('id', $id)->update(['state' => $new]);
		
	}
	
}
