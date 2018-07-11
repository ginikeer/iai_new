<?php namespace App\Http\Controllers\Admin;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
//		$this->middleware('auth');
		$this->middleware('admin');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		
		return view('home');
	}

}
