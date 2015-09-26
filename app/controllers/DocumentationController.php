<?php

class DocumentationController extends BaseController {

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

	public function getIndex()
	{
		return 'index';
	}

	public function getPage($page)
	{
		if (View::exists('documentation.' . $page))
		{
			return View::make('documentation.' . $page);
		}

		return App::abort(404);
	}
}
