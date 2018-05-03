<?php namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;

use Session, DB, Cookie, Redirect;

class ClientAuthenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{				
		if(! Cookie::has("iai_user_token")) {
			return Redirect::to('auth/login');
		}
		
		return $next($request);
	}

}
