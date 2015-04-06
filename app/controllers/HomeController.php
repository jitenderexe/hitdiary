<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	
	/*
	|------------------------------------
	| Home Controller
	|------------------------------------
	|	Home Controller For Login View
	|
	*/
	public function loginView()
	{
			return View::make('main')->with('page', 'login');
	}
	
	/*
	|------------------------------------
	| Home Controller
	|------------------------------------
	|	Home Controller For SignUp View
	|
	*/
	public function signupView()
	{
			return View::make('main')->with('page', 'signup');
	}

}
