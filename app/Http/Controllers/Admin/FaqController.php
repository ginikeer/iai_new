<?php namespace App\Http\Controllers\Admin;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

use App\Services\Helper;

use App\Http\Database\Faq;
use App\Http\Database\Faq_Category;

use Redirect, Input, Auth, Session, DB;

class FaqController extends Controller {

	public $category;
	
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
//		$this->middleware('auth');
		$this->middleware('admin');
		$this->category 									= Faq_Category::getAll();
	}

	public function getCategory(Request $request)
	{
		$data 												= $this->category;
		
        if ($request->has('page')) {
            $current_page 									= $request->input('page');
            $current_page 									= $current_page <= 0 ? 1 : $current_page;
        } else {
            $current_page 									= 1;
        }
        
        $total 												= count($data);
        $item 												= array_slice($data, ($current_page - 1) * PER, PER);
        $paginator 											= new LengthAwarePaginator($item, $total, PER, $current_page, [
            'path' 		=> Paginator::resolveCurrentPath(),
            'pageName' 	=> 'page',
        ]);
        
        $datalist 											= $paginator->toArray()['data'];
        return view('admin/faq-category-list', compact('datalist', 'paginator'));
	}
	
	public function getCategorySingle(Request $request)
	{
		$id													= $request->input('id', '');
		$third_level										= Faq_Category::getDataByParent(0);
		
		if(empty($id)) {	//新增
			$data											= array();
		} else {	//编辑
			$data											= Faq_Category::getDataById($id);
			$data											= $data[0];
		}
		
		return view('admin/faq-category-single', compact('third_level', 'data'));
	}
	
	public function postCategorySecondLevel(Request $request)
	{
		$id													= $request->input('id', '');
		$second_level										= Faq_Category::getDataByParent($id);
		
		echo json_encode($second_level);
	}
	
	public function postCategorySave(Request $request)
	{
		$id 												= $request->input('id', '');
		$third_level										= $request->input('third_level');
		$second_level										= $request->input('second_level');
		$name												= $request->input('name');
		$nameCtgry											= $request->input('nameCtgry');
		$data 												= empty($id) ? new Faq_Category : Faq_Category::find($id);
		
		//分类1没有选择，即当前分类为分类1;分类2没有选择，即当前分类为分类2
		if(empty($third_level) || empty($second_level)) {
			$data->name										= $name;
			$data->parent									= empty($third_level) ? 0 : $third_level;
		} else {	//分类3
			$data->name										= $name;
			$data->nameCtgry								= $nameCtgry;
			$data->parent									= $second_level;
		}
		
		$data->save();
		return Redirect::to(Helper::genUrl('admin/faq/category-single', $id));
	}
	
	public function getList(Request $request)
	{
		$data 												= $this->conditionFaq($request);
		
		return view('admin/faq-list', ['data' => $data]);
	}
	
	public function getSingle(Request $request)
	{
		$id 												= $request->input('id', '');
		
		if(empty($id)) {	//新增
			$data 											= array();
		} else {	//编辑
			$data											= Faq::where('id', $id)->first();
		}
		
		return view('admin/faq-single', [
			'data'											=> $data
		]);
	}
	
	public function postSave(Request $request)
	{
		$id 												= $request->input('id', '');
		$data 												= empty($id) ? new Faq : Faq::find($id);
		$data->mid											= $request->input('mid');
		$data->c1											= $request->input('c1');
		$data->c2											= $request->input('c2');
		$data->c3											= $request->input('c3');
		$data->stage										= $request->input('stage');
		$data->content										= $request->input('content');
		$data->errcode										= $request->input('errcode');
		$data->question										= $request->input('question');
		$data->answer										= $request->input('answer');
		$data->memo											= $request->input('memo');
		$data->state										= $request->input('state');
		$data->save();
		
		return Redirect::to(Helper::genUrl('admin/faq/single', $id));
	}
	
	
	
	private function conditionFaq($request)
	{
		$stage												= $request->input('stage', '');
		$c1													= $request->input('c1', '');
		$c2													= $request->input('c2', '');
		$c3													= $request->input('c3', '');
		$content											= $request->input('content', '');
		$mid												= $request->input('mid', '');
		$keyword											= $request->input('keyword', '');
		$errcode											= $request->input('errcode', '');
		
		$data												= DB::table('faq');
		
		if( !empty($stage) ) 
			$data->where('stage', 'like', '%' . $stage . '%');
		if( !empty($c1) ) 
			$data->where('c1', 'like', '%' . $c1 . '%');
		if( !empty($c2) ) 
			$data->where('c2', 'like', '%' . $c2 . '%');
		if( !empty($c3) ) 
			$data->where('c3', 'like', '%' . $c3 . '%');
		if( !empty($content) ) 
			$data->where('content', 'like', '%' . $content . '%');
		if( !empty($mid) ) 
			$data->where('mid', $mid);
		if( !empty($keyword) ) 
			$data->where('question', 'like', '%' . $keyword . '%');
		if( !empty($errcode) ) 
			$data->where('errcode', $errcode);
		
		$count												= $data->count();
		$data												= $data->orderBy('id', 'desc')->paginate(PER);
		$data->condition_stage 								= $stage;
		$data->condition_c1 								= $c1;
		$data->condition_c2 								= $c2;
		$data->condition_c3 								= $c3;
		$data->condition_content 							= $content;
		$data->condition_mid 								= $mid;
		$data->condition_keyword							= $keyword;
		$data->condition_errcode 							= $errcode;
		$data->count										= $count;
		
		return $data;
	}
}
