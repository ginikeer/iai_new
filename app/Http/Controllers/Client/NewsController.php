<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\News;
use App\Http\Database\News_Category;

use Redirect, Input, Auth, Session, DB;

class NewsController extends Controller {

	public $nav;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->nav											= 'news';
	}

	public function getIndex(Request $request)
	{
		$data												= News::orderBy('id', 'desc')->get();
		
		for($i = 0; $i < count($data); $i++) {
			$data[$i]->category_background					= News_Category::getBackgroundById($data[$i]->category);
			$data[$i]->category								= News_Category::getTitleById($data[$i]->category);
			$data[$i]->date									= date('Y-m-d', strtotime($data[$i]->created_at));
		}
		
		return view('client/news-list', [
			'nav'											=> $this->nav,
			'news'											=> $data
		]);
	}
	
	public function getDetail($id)
	{
		$news												= News::where('id', $id)->first();
		$news->category_background							= News_Category::getBackgroundById($news->category);
		$news->category										= News_Category::getTitleById($news->category);
		$news->date											= date('Y-m-d', strtotime($news->created_at));
		
		return view('client/news-detail', [
			'nav'											=> $this->nav,
			'news'											=> $news,
		]);
		
	}
	
	
	
	

}
