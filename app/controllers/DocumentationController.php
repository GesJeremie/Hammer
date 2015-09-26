<?php

class DocumentationController extends BaseController {

	protected $layout = 'layouts.documentation';

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
			View::share('page', $page);
			$this->layout->content = View::make('documentation.' . $page);
		}
		else
		{
			return App::abort(404);
		}

	}
}
