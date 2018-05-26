<?php namespace heide\Http\Controllers;

use Session;

use DB;

class WelcomeController extends Controller {
	public function __construct()
	{
		$this->middleware('lang');
	}
	public function getIndex()
	{
		
		return view('front.index',['pn'=>'HOME']);
	}
	
}
