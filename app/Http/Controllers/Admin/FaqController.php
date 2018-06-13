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
		
		//分类1没有选择，即当前分类为分类1
		if(empty($third_level)) {
			$data->name										= $name;
			$data->parent									= 0;
			$data->save();
			
			return Redirect::to(Helper::genUrl('admin/faq/category-single', $id));
		}
		
		//分类2没有选择，即当前分类为分类2
		if(empty($second_level)) {
			
		}
		
		
		
		
	}

	
	public function getList()
	{
		$data 												= Cases::orderBy('id', 'desc')->paginate(PER);
		
		for($i = 0; $i < count($data); $i++) {
			$data[$i]['str_tags'] 							= implode( "，", Case_tag::getTitle( explode(',', $data[$i]['tag_ids']) ) );
		}
		
		return view('admin/case-list', ['data' => $data]);
	}
	
	public function getSingle(Request $request)
	{
		$id 												= $request->input('id', '');
		$case 												= array();
		$selected_tag										= array();
		$selected_icon										= array();
		
		
		if(empty($id)) {	//新增
			$selected_tag['arr_ids']						= array();
			$selected_tag['str_titles']						= "";
			$selected_icon['arr_ids']						= array();
			$selected_icon['str_titles']					= "";
		} else {	//编辑
			$case											= Cases::where('id', $id)->first();
			$selected_tag['arr_ids']						= explode( ",", $case->tag_ids );
			$selected_tag['str_titles']						= implode( "，", Case_tag::getTitle( $selected_tag['arr_ids'] ) );
			$selected_icon['arr_ids']						= explode( ",", $case->icon_ids );
			$selected_icon['str_titles']					= implode( "，", Case_icon::getTitle( $selected_icon['arr_ids'] ) );
		}
		
		
		
		return view('admin/case-single', [
			'case'											=> $case,
			'category' 										=> $this->category,
			'logo'											=> $this->logo,
			'tag'											=> $this->tag,
			'icon'											=> $this->icon,
			'selected_tag'									=> $selected_tag,
			'selected_icon'									=> $selected_icon
		]);
	}
	
	public function postSave(Request $request)
	{
		$id 												= $request->input('id', '');
		$data 												= empty($id) ? new Cases : Cases::find($id);
		$data->title										= $request->input('title');
		$data->category										= $request->input('category');
		$data->tag_ids										= $request->input('tag_ids');
		$data->cover_image_name								= $request->input('cover_image_name');
		$data->description									= Helper::newlineEscape($request->input('description'));
		$data->logo											= $request->input('logo');
		$data->sub_title									= Helper::newlineEscape($request->input('sub_title'));
		$data->video_name									= $request->input('video_name');
		$data->icon_ids										= $request->input('icon_ids');
		$data->content										= $request->input('content');
		$data->save();
		
		return Redirect::to(Helper::genUrl('admin/case/single', $id));
	}
	
	public function postDel(Request $request)
	{
		try {
			Cases::where('id', $request->input('id'))->delete();
			
			echo "ok";
		} catch (\Exception $e) {
			print_r($e); 
		}
	}
	
	
}
