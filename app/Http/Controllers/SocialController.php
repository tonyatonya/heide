<?php namespace heide\Http\Controllers;



use Illuminate\Http\Request;

use heide\Model\Social;

class SocialController extends Controller {



	/*

	|--------------------------------------------------------------------------

	| Welcome Controller

	|--------------------------------------------------------------------------

	|

	| This controller renders the "marketing page" for the application and

	| is configured to only allow guests. Like most of the other sample

	| controllers, you are free to modify or remove it as you desire.

	|

	*/



	/**

	 * Create a new controller instance.

	 *

	 * @return void

	 */

	public function __construct()

	{

		$this->middleware('auth');

	}



	/**

	 * Show the application welcome screen to the user.

	 *

	 * @return Response

	 */

	public function getIndex()

	{	
		$ig = Social::where('type','ig')->first();
		$facebook = Social::where('type','facebook')->first();
		$wc = Social::where('type','wc')->first();
		$wb = Social::where('type','wb')->first();

		return view('admin.social',['pn' => 'Social'])
				->with('wc',$wc)
				->with('wb',$wb)
				->with('facebook',$facebook)
				->with('ig',$ig);
	}
	public function postIndex(Request $request)

	{
		$ig = Social::where('type','ig')->first();
		$ig->url = $request->ig;
		$ig->save();

		$facebook = Social::where('type','facebook')->first();
		$facebook->url = $request->facebook;
		$facebook->save();

		$wc = Social::where('type','wc')->first();
		$wc->url = $request->wc;
		$wc->save();

		$wb = Social::where('type','wb')->first();
		$wb->url = $request->wb;
		$wb->save();
		
		return redirect('admin/Social');

	}

}

