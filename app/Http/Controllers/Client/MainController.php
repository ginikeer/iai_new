<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Product_Category;
use App\Http\Database\News;
use App\Http\Database\News_Category;
use App\Http\Database\Cases;
use App\Http\Database\Case_tag;

class MainController extends Controller {

	public $nav;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->nav 										= 'home';
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news												= News::orderBy('id', 'desc')->take(5)->get();
		for($i = 0; $i < count($news); $i++) {
			$news[$i]->category_background					= News_Category::getBackgroundById($news[$i]->category);
			$news[$i]->category								= News_Category::getTitleById($news[$i]->category);
			$news[$i]->date									= date('Y-m-d', strtotime($news[$i]->created_at));
		}
		
		$case												= Cases::orderBy('id', 'desc')->take(4)->get();
		for($i = 0; $i < count($case); $i++) {
			$selected_tag['arr_ids']						= explode( ",", $case[$i]->tag_ids );
			$case[$i]->tags									= Case_tag::getTitleAndType( $selected_tag['arr_ids'] );
			$case[$i]->primary_tag							= Case_tag::getIdByType( $selected_tag['arr_ids'], '行业' );
		}
		
		return view('client/home', [
			'nav'										=> $this->nav,
			'category'									=> Product_Category::getAll(),
			'news'										=> $news,
			'case'										=> $case
		]);
	}

}
