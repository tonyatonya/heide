<?php namespace heide\Http\Controllers;
use Illuminate\Http\Request;
use heide\Model\Gallery;
use heide\Model\GalleryImg;
use Image; 
class GalleryController extends Controller {
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
		$data = Gallery::paginate(15);
		return view('admin.gallery',['pn' => 'Gallery'])->with('data',$data);
	}
	public function getCreate()
	{
		return view('admin.gallery-create',['pn' => 'Gallery']);
	}
	public function getEdit($id)
	{
		$data = Gallery::find($id);
		$gallery = GalleryImg::where('ref_id',$id)->get();
		return view('admin.gallery-create',['pn' => 'Gallery'])->with('gallery',$gallery)->with('data',$data);
	}
	public function postCreate(Request $request)
	{
		$data = new Gallery;
		$data->type = $request->type;
		$data->name_en = $request->name_en;
		$data->name_ch = $request->name_ch;
		$data->link_en = $request->link_en;
		$data->link_ch = $request->link_ch;
		if($request->hasFile('photo')){
			$file = $request->file('photo');
			$filename = $file->getClientOriginalName();
			$name = explode('.', $filename);
			$i=2;
			while (file_exists ('images/'.$filename)) {
				$filename = $name[0]."_".$i.'.'.$name[1];
				$i = $i+1;
			}
			Image::make($request->file('photo'))->resize(545,363)->save('images/'.$filename);
			$data->photo = $filename;
		}
		$data->save();
		if($request->input('gimage')){
		  foreach($request->input('gimage') as $k => $gid){
		    GalleryImg::where('id',$gid)->update(['ref_id' => $data->id]);
		  }
		}
		return redirect('admin/Gallery');
	}
	public function postEdit(Request $request,$id)
	{
		$data =  Gallery::find($id);
		$data->type = $request->type;
		$data->name_en = $request->name_en;
		$data->name_ch = $request->name_ch;
		$data->link_en = $request->link_en;
		$data->link_ch = $request->link_ch;
		if($request->hasFile('photo')){
			$file = $request->file('photo');
			$filename = $file->getClientOriginalName();
			$name = explode('.', $filename);
			$i=2;
			while (file_exists ('images/'.$filename)) {
				$filename = $name[0]."_".$i.'.'.$name[1];
				$i = $i+1;
			}
			Image::make($request->file('photo'))->resize(545,363)->save('images/'.$filename);
			$data->photo = $filename;
		}
		$data->save();
		if($request->input('gimage')){
		  foreach($request->input('gimage') as $k => $gid){
		    GalleryImg::where('id',$gid)->update(['ref_id' => $data->id]);
		  }
		}
		return redirect('admin/Gallery');
	}
	public function postUpload(Request $request){
	  if($request->hasFile('file')){
	   $file  = $request->file('file');
	   $path  = 'images/Gallery/';
	   $name = time().'-'. str_replace(' ', '', $file->getClientOriginalName());
	   $ftype = $file->getClientOriginalExtension();
	   $filename = $name;// . '.' . $ftype; 
	   Image::make($file)->resize(545,363)->save($path . $filename);
	   $images = new GalleryImg;
	   $images->img_name  = $filename;
	   $images->save();
	   return $images->id;
	  }
	 }
	 public function getImagdel($id){
	 	$img = GalleryImg::find($id);
	 	try {
				unlink('images/Gallery/'.$img->img_name);
			}catch (\Exception $e) {}
		$img->delete();
	 }
	 public function getDelete($id){
	 	$img = GalleryImg::find($id);
	 	$data = Gallery::find($id);
	 	foreach($data as $key => $val){
	 		try {
				unlink('images/Gallery/'.$img->img_name);
			}catch (\Exception $e) {}
	 	}
	 	if(count($img)>0){
	 		$img->delete();
	 	}
		$data->delete();
		return redirect('admin/Gallery');
	 }
}
