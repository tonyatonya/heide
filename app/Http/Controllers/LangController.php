<?php namespace heide\Http\Controllers;
use App;
use Session;
class LangController extends Controller {

	public function getEn()
	{
		Session::put('Lang','en');
		App::setLocale('en');
		return redirect()->back();

	}

	public function getCh()
	{
		Session::put('Lang','ch');
		App::setLocale('ch');
		return redirect()->back();
	}

}
