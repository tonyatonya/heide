<?php namespace heide\Http\Controllers;



use Illuminate\Http\Request;

use heide\Model\Images;

use heide\Model\Investor;

use heide\Model\Contactus;

use heide\Model\LocationImg;

use heide\Model\Location;

use Image; 



class ContactusController extends Controller {



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

		$banner = Images::find(5);

		$investor = Investor::find(1);

		$contact = Contactus::orderBy('id')->get();

		$localtion = Location::orderBy('id')->get();

		return view('admin.contactus',['pn' => 'Contactus'])

				->with('banner',$banner)

				->with('contact',$contact)

				->with('localtion',$localtion)

				->with('investor',$investor);

	}



	public function postInvestor(Request $request)

	{

		$data = Investor::find(1);

		$input = $request->all();

		foreach ($input as $key => $value) {

			$data->{$key} = $value;

		}

		$data->save();

		return redirect()->back();

	}



	public function postOffice(Request $request){

		$data = new Contactus;

		$input = $request->all();

		foreach ($input as $key => $value) {

			$data->{$key} = $value;

		}

		$data->save();

		return redirect()->back();

	}

	public function postOfficeedit(Request $request){

		$data =  Contactus::find($request->id);

		$input = $request->all();

		foreach ($input as $key => $value) {

			$data->{$key} = $value;

		}

		$data->save();

		return redirect()->back();

	}

	public function getContactus(Request $request){

		$data = Contactus::find($request->id);

		return $data->toJson();

	}

	public function getDeloffice($id){

		Contactus::where('id',$id)->delete();

		return redirect()->back();

	}
	public function getImglocationdel($id){
		$img = LocationImg::find($id);
	 	try {
				unlink('images/location/'.$img->img_name);
			}catch (\Exception $e) {}
		$img->delete();
	}
	public function getDellocation($id){
		Location::where('id',$id)->delete();
		$gallery = LocationImg::where('ref_id',$id)->get();
		foreach ($gallery as $key => $v) {
			try {
				unlink('images/location/'.$v->img_name);

			}catch (\Exception $e) {}
		}
		LocationImg::where('ref_id',$id)->delete();
		return redirect()->back();
	}

	public function getLocation(){

		return view('admin.location-create',['pn' => 'Contactus']);

	}

	public function getLocationedit($id)

	{

		$data = Location::find($id);

		$gallery = LocationImg::where('ref_id',$id)->get();

		return view('admin.location-create',['pn' => 'Contactus'])->with('gallery',$gallery)->with('data',$data);

	}

	public function postLocation(Request $request){

		$data = new Location;

		$data->type = $request->type;

		$data->location_en = $request->location_en;

		$data->location_ch = $request->location_ch;

		$data->address_en = $request->address_en;

		$data->address_ch = $request->address_ch;



		$data->time = $request->time;

		$data->tel = $request->tel;

		$data->instagram = $request->instagram;

		$data->facebook = $request->facebook;

		$data->youtube = $request->youtube;

		$data->save();



		if($request->input('gimage')){

		  foreach($request->input('gimage') as $k => $gid){

		    LocationImg::where('id',$gid)->update(['ref_id' => $data->id]);

		  }

		}

		return redirect('admin/Contactus');

	}

	public function postLocationedit(Request $request,$id){

		$data = Location::find($id);

		$data->type = $request->type;

		$data->location_en = $request->location_en;

		$data->location_ch = $request->location_ch;

		$data->address_en = $request->address_en;

		$data->address_ch = $request->address_ch;



		$data->time = $request->time;

		$data->tel = $request->tel;

		$data->instagram = $request->instagram;

		$data->facebook = $request->facebook;

		$data->youtube = $request->youtube;

		$data->save();



		if($request->input('gimage')){

		  foreach($request->input('gimage') as $k => $gid){

		    LocationImg::where('id',$gid)->update(['ref_id' => $data->id]);

		  }

		}

		return redirect('admin/Contactus');

	}

	public function postBanner(Request $request)

	{

		$data = Images::find(5);

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

	

	public function postUpload(Request $request){

	  if($request->hasFile('file')){

	   $file  = $request->file('file');

	   $path  = 'images/location/';

	   $name = time().'-'. str_replace(' ', '', $file->getClientOriginalName());

	   $ftype = $file->getClientOriginalExtension();

	   $filename = $name;// . '.' . $ftype; 

	   Image::make($file)->resize(427,251)->save($path . $filename);

	       

	   $images = new LocationImg;

	   $images->img_name  = $filename;

	   $images->save();

	   return $images->id;

	  }

	 }



}

