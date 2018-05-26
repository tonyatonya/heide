<?php namespace heide\Http\Controllers;



use Illuminate\Http\Request;

use heide\Model\Concept;

use heide\Model\ConceptImg;

use Image; 

use heide\Model\FoodType;

class ConceptController extends Controller {



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
		$data = Concept::orderBy('sort','asc')->paginate(15);
		$min_sort = Concept::min('sort');
		$max_sort = Concept::max('sort');
		return view('admin.concept',['pn' => 'Concept'])
			->with('min_sort',$min_sort)
			->with('max_sort',$max_sort)
			->with('data',$data);
	}

	public function getCreate()

	{
		$foodtype = FoodType::get();
		return view('admin.concept-create',['pn' => 'Concept'])->with('foodtype',$foodtype);

	}

	public function getEdit($id)

	{

		$data = Concept::find($id);

		$gallery = ConceptImg::where('ref_id',$id)->get();

		$foodtype = FoodType::get();
		
		return view('admin.concept-create',['pn' => 'Concept'])->with('foodtype',$foodtype)->with('gallery',$gallery)->with('data',$data);

	}

	public function getUp($id)

	{

		$data = Concept::find($id);

		$data->sort = $data->sort - 1.5;

		$data->save();

		$data = Concept::orderBy('sort','asc')->get();

		foreach ($data as $key => $value) {

			$update = Concept::find($value->id);

			$update->sort = $key + 1;

			$update->save();

		}

		return redirect()->back();

	}

	public function getDown($id)

	{

		$data = Concept::find($id);

		$data->sort = $data->sort + 1.5;

		$data->save();

		$data = Concept::orderBy('sort','asc')->get();

		foreach ($data as $key => $value) {

			$update = Concept::find($value->id);

			$update->sort = $key + 1;

			$update->save();

		}

		return redirect()->back();

	}

	public function postCreate(Request $request)

	{

			

		$data = new Concept;

		$data->topic_main = $request->topic_main;
		$data->type = $request->type;
		$data->topic_en = $request->topic_en;

		$data->topic_ch = $request->topic_ch;

		$data->introduction_en = $request->introduction_en;

		$data->introduction_ch = $request->introduction_ch;

		$data->detail_en = $request->detail_en;

		$data->detail_ch = $request->detail_ch;

		$data->sort = Concept::max('sort') + 1;

		if($request->hasFile('photo')){

			$file = $request->file('photo');

			$filename = $file->getClientOriginalName();

			$name = explode('.', $filename);

			$i=2;

			while (file_exists ('images/'.$filename)) {

				$filename = $name[0]."_".$i.'.'.$name[1];

				$i = $i+1;

			}

			Image::make($request->file('photo'))->resize(797,745)->save('images/'.$filename);

			Image::make('images/'.$filename)->resize(797,745, function ($constraint) {

				    $constraint->aspectRatio();

			})->save('images/thumbs/'.$filename);

			





			$data->photo = $filename;

		}

		$data->save();

		if($request->input('gimage')){

		  foreach($request->input('gimage') as $k => $gid){

		    ConceptImg::where('id',$gid)->update(['ref_id' => $data->id]);

		  }

		}

		return redirect('admin/Concept');

	}



	public function postEdit(Request $request,$id)

	{



		$data = Concept::find($id);

		$data->topic_main = $request->topic_main;
		$data->type = $request->type;
		$data->topic_en = $request->topic_en;

		$data->topic_ch = $request->topic_ch;

		$data->introduction_en = $request->introduction_en;

		$data->introduction_ch = $request->introduction_ch;

		$data->detail_en = $request->detail_en;

		$data->detail_ch = $request->detail_ch;

		if($request->hasFile('photo')){

			$file = $request->file('photo');

			$filename = $file->getClientOriginalName();

			$name = explode('.', $filename);

			$i=2;

			while (file_exists ('images/'.$filename)) {

				$filename = $name[0]."_".$i.'.'.$name[1];

				$i = $i+1;

			}

			Image::make($request->file('photo'))->resize(797,745)->save('images/'.$filename);

			Image::make('images/'.$filename)->resize(797,745, function ($constraint) {

				    $constraint->aspectRatio();

			})->save('images/thumbs/'.$filename);

			

			try {

				unlink('images/'.$data->photo);

				unlink('images/thumbs/'.$data->photo);

			}catch (\Exception $e) {}



			$data->photo = $filename;

		}

		$data->save();

		if($request->input('gimage')){

		  foreach($request->input('gimage') as $k => $gid){

		    ConceptImg::where('id',$gid)->update(['ref_id' => $data->id]);

		  }

		}

		return redirect('admin/Concept');

	}





	public function postUpload(Request $request){

	  if($request->hasFile('file')){

	   $file  = $request->file('file');

	   $path  = 'images/';

	   $name = time().'-'. str_replace(' ', '', $file->getClientOriginalName());

	   $ftype = $file->getClientOriginalExtension();

	   $filename = $name;// . '.' . $ftype; 

	   Image::make($file)->resize(545,363)->save($path . $filename);

	       

	   $images = new ConceptImg;

	   $images->img_name  = $filename;

	   $images->save();

	   return $images->id;

	  }

	 }



	 public function getImagdel($id){

	 	$img = ConceptImg::find($id);

	 	try {

				unlink('images/'.$img->img_name);

				unlink('images/thumbs/'.$img->img_name);

			}catch (\Exception $e) {}

		$img->delete();

	 }



	 public function getDelete($id){

	 	$data = Concept::find($id);

	 	$img = ConceptImg::where('ref_id',$id)->get();

	 	foreach ($img as $key => $value) {

	 		try {

				unlink('images/'.$value->img_name);

				unlink('images/thumbs/'.$value->img_name);

			}catch (\Exception $e) {}

			$del = ConceptImg::find($value->id);

			$del->delete();

	 	}

	 	$data->delete();

		return redirect('admin/Concept');

	 }



}

