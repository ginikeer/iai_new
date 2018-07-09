<?php namespace App\Http\Controllers\Client;
	
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\User;


use Redirect, Input, Auth, Session, DB, Cookie;

class ApplicationController extends Controller {

	public $uid;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	public function getIndex(Request $request)
	{
		
		return view('client/application', [
		]);
	}
	
	public function getCheck(Request $request)
	{
		
		return view('client/applicationCheck', [
		]);
	}
	
	public function getComplete(Request $request)
	{
		
		return view('client/applicationComplete', [
		]);
	}
	
}
