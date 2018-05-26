<?php namespace heide\Http\Controllers;
use Illuminate\Http\Request;
use heide\Model\News;
use Image; 
class NewsController extends Controller {
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
		$data = News::orderBy('id','desc')->paginate(15);
		return view('admin.news',['pn' => 'News'])->with('data',$data);
	}
	public function getCreate()
	{
		return view('admin.news-create',['pn' => 'News']);
	}
	public function getEdit($id)
	{
		$data = News::find($id);
		return view('admin.news-create',['pn' => 'News'])->with('data',$data);
	}
	public function postCreate(Request $request)
	{
		$data = new News;
		$data->topic_en = $request->topic_en;
		$data->topic_ch = $request->topic_ch;
		$data->video_en = $request->video_en;
		$data->video_ch = $request->video_ch;
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
			Image::make($request->file('photo'))->resize(225,159)->save('images/'.$filename);
			Image::make('images/'.$filename)->resize(250, null, function ($constraint) {
				    $constraint->aspectRatio();
			})->save('images/thumbs/'.$filename);
			$data->photo = $filename;
		}
		$data->save();
		return redirect('admin/News');
	}
	public function postEdit(Request $request,$id)
	{
		$data = News::find($id);
		$data->topic_en = $request->topic_en;
		$data->topic_ch = $request->topic_ch;
		$data->video_en = $request->video_en;
		$data->video_ch = $request->video_ch;
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
			Image::make($request->file('photo'))->resize(225,159)->save('images/'.$filename);
			Image::make('images/'.$filename)->resize(225,159, function ($constraint) {
				    $constraint->aspectRatio();
			})->save('images/thumbs/'.$filename);
			try {
				unlink('images/'.$data->photo);
				unlink('images/thumbs/'.$data->photo);
			}catch (\Exception $e) {}
			$data->photo = $filename;
		}
		$data->save();
		return redirect('admin/News');
	}
}
