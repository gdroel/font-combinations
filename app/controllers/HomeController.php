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

	public function index(){

		$combos = Combination::all();

		$url = "http://fonts.googleapis.com/css?family=";

		foreach($combos as $combo){

			$url .= $combo->font1.'|'.$combo->font2.'|';
		
		}

		return View::make('index',compact('url','combos'));
	}

	public function showCreate(){

		$fonts_list = file_get_contents("https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDQYxssJXvX3za0_27pAU3kqmO1p6ByxMo");

		$fonts_list = json_decode( $fonts_list, true );

		$fonts_list = var_dump($fonts_list['items']);
		return View::make('create', compact('fonts_list'));
	}

	public function doCreate(){

		$combination = new Combination();

		$combination->font1 = Input::get('font1');
		$combination->font2 = Input::get('font2');
		$combination->user_id = 0;

		$combination->save();

		return Redirect::to('/');
		
	}

}
