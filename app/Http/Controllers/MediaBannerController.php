<?php namespace heide\Http\Controllers;

use Illuminate\Http\Request;
use heide\Model\Images;
use Image; 

class MediaBannerController extends Controller {

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
		$banner = Images::find(4);
		return view('admin.media-banner',['pn' => 'MediaBanner'])->with('banner',$banner);
	}
	public function postBanner(Request $request)
	{
		$data = Images::find(4);
		$size = explode(' x ',$request->imgsize);
		if($request->hasFile('photo')){
			$file = $request->file('photo');
			$filename = $file->getClientOriginalName();
			$name = explode('.', $filename);
			$i=2;
			while (file_exists ('images/'.$filename)) {
				$filename = $name[0]."_".$i.'.'.$name[1];
				$i = $i+1;
			}
			Image::make($request->file('photo'))->resize(1331,749)->save('images/'.$filename);
			Image::make('images/'.$filename)->resize(1331,749, function ($constraint) {
				    $constraint->aspectRatio();
			})->save('images/thumbs/'.$filename);
			try {
				unlink('images/'.$data->img_name);
				unlink('images/thumbs/'.$data->img_name);
			}catch (\Exception $e) {}

			$data->img_name = $filename;
			$data->save();
		}
		return redirect()->back();
	}
	
}
