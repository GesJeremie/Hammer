<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Documentation
Route::get('/documentation', 'DocumentationController@getIndex');
Route::get('/documentation/{page}', 'DocumentationController@getPage');
Route::get('/', function() {
  return View::make('home');
});
