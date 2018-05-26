<?php namespace heide\Http\Controllers;



use heide\Services\PayUService\Exception;

use Illuminate\Http\Request;

use heide\Http\Requests\BannerRequest;

use heide\Model\Slide;

use heide\Model\IndexAbout;

use heide\Model\Images;

use heide\Model\SuggestFood;

use Image; 
use Storage;


class SlideController extends Controller {



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

		$data = Slide::orderBy('sort','ASC')->get();

		$min_sort = Slide::min('sort');

		$max_sort = Slide::max('sort');



		$about = IndexAbout::find(1);

		$banner = Images::find(1);

		$SuggestFood1 = SuggestFood::find(1);

		$SuggestFood2 = SuggestFood::find(2);

		$img_suggest1 = Images::find(2);////Suggest Food 1

		$img_suggest2 = Images::find(3);////Suggest Food 1

		return view('admin.slide',['pn' => 'Slide'])

						->with('data',$data)

						->with('banner',$banner)

						->with('min_sort',$min_sort)

						->with('max_sort',$max_sort)

						->with('SuggestFood1',$SuggestFood1)

						->with('SuggestFood2',$SuggestFood2)

						->with('img_suggest1',$img_suggest1)

						->with('img_suggest2',$img_suggest2)

						->with('about',$about);

	}

	public function postIndex(Request $request)

	{

		$file = $request->file('photo');

		if(!empty($file)){

			if(in_array($file->getClientOriginalExtension(),['jpg','png','gif'])){

				$slider = New Slide;


				$filename = $file->getClientOriginalName();

				$name = explode('.', $filename);

				$i=2;

				while (file_exists ('images/'.$filename)) {

					$filename = $name[0]."_".$i.'.'.$name[1];

					$i = $i+1;

				}

				Image::make($request->file('photo'))->resize(1281,644)->save('images/'.$filename);

				Image::make('images/'.$filename)->resize(250, null, function ($constraint) {

					    $constraint->aspectRatio();

				})->save('images/thumbs/'.$filename);

				

				$slider->name = $filename;

				$slider->sort = Slide::max('sort') + 1;
				$slider->type = 'image';
				$slider->save();

			}

			//elseif(in_array($file->getClientOriginalExtension(),['mp4'])){
			else{
				$slider = New Slide;

				$filename = $file->getClientOriginalName();

				$name = explode('.', $filename);

				$i=2;

				while (file_exists ('images/'.$filename)) {

					$filename = $name[0]."_".$i.'.'.$name[1];

					$i = $i+1;

				}

				//$file->move(base_path('images/'.$filename));
				$file->move('images', $filename); 
				
				$slider->name = $filename;

				$slider->sort = Slide::max('sort') + 1;
				$slider->type = 'video';
				$slider->save();

			}

		}

		return redirect('admin/Slide');

	}



	public function getDelete($id)

	{

		$data = Slide::find($id);

		try {

			unlink('images/'.$data->name);

			unlink('images/thumbs/'.$data->name);

		} catch (\Exception $e) {

			

		}

		$data->delete();

		return redirect()->back();

	}

	public function getUp($id)

	{

		$data = Slide::find($id);

		$data->sort = $data->sort - 1.5;

		$data->save();

		$data = Slide::orderBy('sort','asc')->get();

		foreach ($data as $key => $value) {

			$update = Slide::find($value->id);

			$update->sort = $key + 1;

			$update->save();

		}

		return redirect()->back();

	}

	public function getDown($id)

	{

		$data = Slide::find($id);

		$data->sort = $data->sort + 1.5;

		$data->save();

		$data = Slide::orderBy('sort','asc')->get();

		foreach ($data as $key => $value) {

			$update = Slide::find($value->id);

			$update->sort = $key + 1;

			$update->save();

		}

		return redirect()->back();

	}

	public function postAboutimg(Request $request){

		$data = IndexAbout::find(1);

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

			Image::make($request->file('photo'))->resize($size[0],$size[1])->save('images/'.$filename);

			Image::make('images/'.$filename)->resize($size[0], $size[1], function ($constraint) {

				    $constraint->aspectRatio();

			})->save('images/thumbs/'.$filename);

			try {

				unlink('images/'.$data->{'img_'.$request->imgabout});

				unlink('images/thumbs/'.$data->{'img_'.$request->imgabout});

			}catch (\Exception $e) {}



			$data->{'img_'.$request->imgabout} = $filename;

			$data->save();

		}

		return redirect()->back();

	}



	public function postSuggestimg(Request $request){

		$data = Images::find($request->imgsuggest);

		$size = explode(' x ',$request->imgsuggestsize);

		if($request->hasFile('photo')){

			$file = $request->file('photo');

			$filename = $file->getClientOriginalName();

			$name = explode('.', $filename);

			$i=2;

			while (file_exists ('images/'.$filename)) {

				$filename = $name[0]."_".$i.'.'.$name[1];

				$i = $i+1;

			}

			Image::make($request->file('photo'))->resize($size[0],$size[1])->save('images/'.$filename);

			Image::make('images/'.$filename)->resize($size[0], $size[1], function ($constraint) {

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



	public function postAboutdetail(Request $request){

		$data = IndexAbout::find(1);

		$input = $request->all();

		foreach ($input as $key => $value) {

			$data->{$key} = $value;

		}

		$data->save();

		return redirect()->back();

	}



	public function postSuggest1(Request $request){

		$data = SuggestFood::find(1);

		$input = $request->all();

		foreach ($input as $key => $value) {

			$data->{$key} = $value;

		}

		$data->save();

		return redirect()->back();

	}



	public function postSuggest2(Request $request){

		$data = SuggestFood::find(2);

		$input = $request->all();

		foreach ($input as $key => $value) {

			$data->{$key} = $value;

		}

		$data->save();

		return redirect()->back();

	}



	public function postBanner(Request $request){

		$data = Images::find(1);

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

			Image::make($request->file('photo'))->resize(1280,414)->save('images/'.$filename);

			Image::make('images/'.$filename)->resize(1280,414, function ($constraint) {

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

