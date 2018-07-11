<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use Cookie;

class User_Request extends Model {
	protected $table = 'user_request';
	
	protected $guarded  = ["id"];

	protected $fillable = [
		'type',
		'uid',
		'content',
		'state',
		'c_type',
		'answers_str'
	];
	
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

	/**
	 *提交数据
	 *
	 *@return bool
	 */
	static public function createData($data){
		$realData                                           = [];
		if(empty($data['catalog1']) && empty($data['catalog2'])){
			$realData['content']                            = $data['catalog'];
		}

		if(!empty($data['catalog1'])){
			$realData['content']                            = implode(',', $data['catalog1']);
			$realData['c_type']                             = 1;
		}

		if(!empty($data['catalog2'])){
			$realData['content']                            = implode(',', $data['catalog2']);
			$realData['c_type']                             = 2;
		}

		$realData['type']                                   = 2;

		$realData['state']                                  = USER_APPLY_NOT_SENT;
		$realData['uid']                                    = Cookie::get('iai_user_token');

		$realData['answers_str']                            = self::getAnswersData($data);        

		return self::create($realData);
	}

	static public function getAnswersData($data){
		unset($data['catalog1']);unset($data['catalog2']);unset($data['catalog']);
		$data['q3']                                         = implode(',', $data['q3']);
		$data['q7']                                         = implode(',', $data['q7']);
		return json_encode($data);
	}
	
	
}
