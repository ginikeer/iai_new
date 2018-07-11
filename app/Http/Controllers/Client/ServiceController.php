<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Manual;
use App\Http\Database\Manual_Category;
use App\Http\Database\User;
use App\Http\Database\Catalog_Apply;
use App\Http\Database\User_Request;

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
	
	//目录申请展示
	public function getCatalog(Request $request)
	{	
		return view('client/application', [
			'nav'											=> $this->nav,
			'user'											=> Helper::getUserByIAIToken()
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
				'catagory'                                  => $catagory
			);
			Mail::send('emails.catagory', $param, function ($message) {
            	$message->to('727935022@qq.com')->subject('	艾卫艾商贸(上海)有限公司- 2017综合产品目录的申请');
        	});
			$message 									    = ['msg'=>'提交成功','code'=>1,'url'=>url('/service/catalog')];
		} else {
			$message 										= ['msg'=>'提交失败','code'=>0,'url'=>''];
		}
		return $message;      
	}



	//备用
	/*
	public function getCatalog(Request $request)
	{
		return view('client/service-catalog', [
			'nav'											=> $this->nav
		]);
	}*/
	
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
		return view('client/service-faq', [
			'nav'											=> $this->nav
		]);
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
