<?php namespace heide\Http\Controllers;

use heide\Services\PayUService\Exception;
use Illuminate\Http\Request;
use heide\Model\FoodType;
use Image; 
use Storage;


class FoodTypeController extends Controller {



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

		$data = FoodType::orderBy('id','ASC')->get();

		return view('admin.food-type',['pn' => 'FoodType'])

						->with('data',$data);

	}

	public function postIndex(Request $request)
	{
		$file = $request->file('photo');
		if(!empty($file)){
				$slider = New FoodType;
				$filename = $file->getClientOriginalName();
				$name = explode('.', $filename);
				$i=2;
				while (file_exists ('images/type/'.$filename)) {

					$filename = $name[0]."_".$i.'.'.$name[1];

					$i = $i+1;
				}
				Image::make($request->file('photo'))->resize(33,33)->save('images/type/'.$filename);

				$slider->img_name = $filename;
				$slider->save();

		}

		return redirect('admin/FoodType');

	}



	public function getDelete($id)

	{

		$data = FoodType::find($id);

		try {

			unlink('images/type/'.$data->img_name);

		} catch (\Exception $e) {

			

		}

		$data->delete();

		return redirect()->back();

	}
}

