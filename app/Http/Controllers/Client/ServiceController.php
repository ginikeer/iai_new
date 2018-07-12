<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Manual;
use App\Http\Database\Manual_Category;
use App\Http\Database\User;
use App\Http\Database\Catalog_Apply;
use App\Http\Database\User_Request;
use App\Http\Database\Faq_Category;
use App\Http\Database\Faq;

use App\Services\Helper;

use Redirect, Input, Auth, Session, DB, Cookie, Mail;

class ServiceController extends Controller {

	public $nav;
	public $uid;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('client');
		$this->nav											= 'service';
		$this->uid											= Cookie::get("iai_user_token");
	}

	public function getIndex(Request $request)
	{
		
		return view('client/service-list', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getTestmachine(Request $request) 
	{
		return view('client/service-testmachine', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getGuide(Request $request) 
	{
		return view('client/service-guide', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getManual(Request $request) 
	{
		$category											= Manual_Category::getAll();
		$manual												= array();
		
		foreach($category as $c) {
			$manual[$c->id]									= Manual::getDataByCategory($c->id);
		}
		
		return view('client/service-manual', [
			'nav'											=> $this->nav,
			'category'										=> $category,
			'manual'										=> $manual
		]);
	}
	
	public function getManualDownload(Request $request) 
	{
		//记录下载历史并返回PDF文件
		return Helper::downloadFile('app/uploads/manual/pdf', $request);
	}

	//备用
	
	public function getCatalog(Request $request)
	{
		return view('client/service-catalog', [
			'nav'											=> $this->nav
		]);
	}
	

	//提交 目录申请
	public function postCatalog(Request $request){
		$data                                               = Helper::removeFromAll(['_token'],$request->input());
		if(User_Request::createData($data)) {
			$user                                           = Helper::getUserByIAIToken();
			$catagory                                       = !empty($request->input('catalog1')) ? implode(',', $request->input('catalog1')) 
															: (!empty($request->input('catalog2')) ? implode(',', $request->input('catalog2'))
															: '');
			$param                                          = array(
				'company'                                   => $user->company,
				'name'                                      => $user->name,
				'catagory'                                  => $catagory,
				'address'                                   => $user->addr,
				'tel'                                       => $user->tel,
				'department'                                => $user->department
			);
			Mail::send('emails.catagory', $param, function ($message) {
            	$message->to('1500814268@qq.com')->subject('艾卫艾商贸(上海)有限公司- 产品目录的申请');
        	});
			$message 									    = ['msg'=>'提交成功','code'=>1,'url'=>url('/application')];
		} else {
			$message 										= ['msg'=>'提交失败','code'=>0,'url'=>''];
		}
		return $message;      
	}



	
	
	public function getCatalogDownload(Request $request) 
	{
		//记录下载历史并返回PDF文件
		return Helper::downloadFile('app/uploads/catalog/' . $request->input('t'), $request);
	}
	
	public function getSettings(Request $request) 
	{
		return view('client/service-settings', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getVersionhistory(Request $request) 
	{
		return view('client/service-versionhistory', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getHistoryDownload(Request $request) 
	{
		//记录下载历史并返回PDF文件
		return Helper::downloadFile('app/uploads/history/pdf', $request);
	}
	
	public function getOthers(Request $request) 
	{
		return view('client/service-others', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getDelivery(Request $request) 
	{
		return view('client/service-delivery', [
			'nav'											=> $this->nav
		]);
	}
	
	public function getFaq(Request $request) 
	{
		$first_catagory                                     = Faq_Category::getDataByParent(0);

		return view('client/service-faq', [
			'nav'											=> $this->nav,
			'first_catagory'                                => $first_catagory
		]);
	}

	//712
	public function getFaqDetail(Request $request){
		

		return view('client/service-faq-detail',[
			'nav'											=> $this->nav,
			'faqInfo'                                       => Faq::getFaqById($request->id)
		]);
	}

	public function getFaqData(Request $request){
		$catagory                                            = Faq_Category::getDataByParent($request->id);
		$str_html = '';
		foreach ($catagory as $key => $value) {
			$str_html                                       .= '<option value="' . $value->id . '">' . $value->name . '</option>';
		}
		$box['data']                                         = htmlspecialchars($str_html);
		$box['limit']                                        = 0;
		$box['total']                                        = 0;
		$box['error']                            			 = false;
		$box['p']                                            = 0;
		return json_encode($box);	
	}

	//712
	public function getFaqSearch(Request $request){
		$p                                                  = $request->input('p',0);
		$limit                                              = $request->input('limit',30);//页码
		$stage                                              = $request->input('stage');
		$cat1                                               = $request->input('cat1');
		$cat2                                               = $request->input('cat2');
		$cat3                                               = $request->input('cat3');
		$content                                            = $request->input('content');
		$keywords                                           = $request->input('keywords');

		$offset                                             = $limit*$p;


		$sql                                                = "select * from faq ";
		$bool                                               = false;
		$where                                              = '';
		if(!empty($stage)){
			$bool                                           = true;
			$where                                         .= 'where stage LIKE "%' . $stage . '%"';
		}

		if(!empty($cat1)){
			$where                                         .= $bool ? ' and c1 like "%'.Faq_Category::getFieldById($cat1).'%"' : ' where c1 like "%'.Faq_Category::getFieldById($cat1).'%"';
			$bool or $bool                                  = true;
		}

		if(!empty($cat2)){
			$where                                         .= $bool ? ' and c2 like "%'.Faq_Category::getFieldById($cat2).'%"' : ' where c2 like "%'.Faq_Category::getFieldById($cat2).'%"';
			$bool or $bool                                  = true;
		}

		if(!empty($cat3)){
			$where                                         .= $bool ? ' and c3 like "%'.Faq_Category::getFieldById($cat3).'%"' : ' where c2 like "%'.Faq_Category::getFieldById($cat3).'%"';
			$bool or $bool                                  = true;
		}

		if(!empty($content)){
			$where                                         .= $bool ? ' and content like "%'.$content.'%"' : ' where content like "%'.$content.'%"';
			$bool or $bool                                  = true;
		}

		if(!empty($keywords)){

			$where                                         .= $bool ? ' and (question like "%'.$keywords.'%" or answer like "%'.$keywords.'%")'  : ' where question like "%'.$keywords.'%" or answer like "%'.$keywords.'%"';
			$bool or $bool                                  = true;
		}


		$sql                                               .= $where;
		// return json_encode($sql);exit;
		$countArr                                           = DB::select('select count(*) as c from faq ' . $where);
		$sql                                               .= " limit ".$offset.",".$limit;
		$json['data']                                       = DB::select($sql);
		$json['total']                                      = $countArr[0]->c;
		$json['limit']                                      = $limit;
		$json['p']                                          = $p;
		$json['error']                                      = false;

		return $json;
	}
	
	public function getApply(Request $request) 
	{
		return view('client/service-apply', [
			'nav'											=> $this->nav,
			'data'											=> User::where('id', $this->uid)->first()
		]);
	}
	
	public function postApply(Request $request) 
	{
		$param												= array(
			'company' 										=> $request->input('company'), 
			'department'									=> $request->input('department'),
			'name'											=> $request->input('name'),
			'address'										=> $request->input('address'),
			'tel'											=> $request->input('tel'),
			'catalog'										=> "2017"
		);
		
		//发送邮件给shanghai@iai-robot.com
		Mail::send('emails.apply', $param, function($message) {
		    $message->to('lixin@eigyo.com.cn')->subject('艾卫艾商贸(上海)有限公司- 2017综合产品目录的申请');
		});
		
		//存入数据库中
		Catalog_Apply::insertData($param);
		
		return Redirect::to('service/apply-complete');
	}
	
	public function getApplyComplete()
	{
		return view('client/service-apply-complete');
	}
}
