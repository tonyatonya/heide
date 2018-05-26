<?php namespace heide\Http\Controllers;
use heide\Model\Slide;
use heide\Model\IndexAbout;
use heide\Model\Images;
use Session;
use heide\Model\SuggestFood;
use heide\Model\Gallery;
use heide\Model\GalleryImg;
use Illuminate\Http\Request;
use heide\Model\Concept;
use heide\Model\ConceptImg;
use heide\Model\Executive;
use heide\Model\MediaCoverage;
use DB;
use heide\Model\News;
use heide\Model\Investor;
use heide\Model\Contactus;
use heide\Model\Location;
use heide\Model\FoodType;
class WelcomeController extends Controller {
	public function __construct()
	{
		$this->middleware('lang');
	}
	public function getIndex()
	{
		$slide = Slide::orderBy('sort')->get();
		$about = IndexAbout::find(1);
		$about_section = Images::find(1);
		$suggest1 = Images::find(2);
		$suggest2 = Images::find(3);
		$food1 = SuggestFood::find(1);
		$food2 = SuggestFood::find(2);
		$food2 = SuggestFood::find(2);
		$news = News::orderBy('id','desc')->first();
		return view('front.index',['pn'=>'HOME'])
			->with('about',$about)
			->with('suggest1',$suggest1)
			->with('suggest2',$suggest2)
			->with('news',$news)
			->with('food1',$food1)
			->with('food2',$food2)
			->with('about_section',$about_section)
			->with('slide',$slide);
	}
	public function getGallery(Request $request)
	{
		return GalleryImg::where('ref_id',$request->id)
							->join('gallery','gallery.id','=','gallery_img.ref_id')
							->get()
							->toJson();
	}
	public function getVideodetail($id){
		$gallery = Gallery::find($id);
		return view('front.video-detail',['pn'=>'MediaCoverage'])
				->with('gallery',$gallery);
	}
	public function getVideo(Request $request)
	{
		return Gallery::find($request->id)->toJson();
	}
	public function getVideonews(Request $request)
	{
		return News::find($request->id)->toJson();
	}
	public function getGalleryconcept(Request $request){
		return ConceptImg::where('ref_id',$request->id)->get()->toJson();
	}
	public function getConceptdetail(Request $request){
		return Concept::where('concept.id',$request->id)
						->leftJoin('food_type', 'concept.type', '=', 'food_type.id')
							->first()
							->toJson();
	}
	public function getConceptspecs($id){
		$concept = Concept::find($id);
		$img = ConceptImg::where('ref_id',$id)->get();
		$foodtype = FoodType::where('id',$concept->type)->first();
		return view('front.concept-detail',['pn'=>'Concept'])
				->with('concept',$concept)
				->with('foodtype',$foodtype)
				->with('img',$img);
	}
	public function getConcept(Request $request)
	{
		$data = Concept::get();
		return view('front.concept',['pn'=>'Concept'])
				->with('data',$data);
	}
	public function getBio(Request $request)
	{
		return $data = Executive::find($request->id)->toJson();
	}
	public function getContactus(Request $request)
	{
		$banner = Images::find(5);
		$investor = Investor::find(1);
		$contactus = Contactus::orderBy('id')->get();
		$location = Location::orderBy('id')->get();
		return view('front.contactus',['pn'=>'Contactus'])
					->with('investor',$investor)
					->with('contactus',$contactus)
					->with('location',$location)
					->with('banner',$banner);
	}
	public function getBiodetail($id){
		$data = Executive::where('id',$id)->first();
		return view('front.bio-detail',['pn'=>'MediaCoverage'])
				->with('data',$data);
	}
	public function getGallerydetail($id){
		$gallery = Gallery::find($id);
		$img = GalleryImg::where('ref_id',$id)->get();
		return view('front.gallery-detail',['pn'=>'MediaCoverage'])
				->with('gallery',$gallery)
				->with('img',$img);
	}
	public function getCoveragedetail($id){
		$data = MediaCoverage::select(DB::raw('*,DATE_FORMAT(created_at, "%M %d, %Y") as date_create'))->where('id',$id)->first();
		$news = MediaCoverage::orderBy('id','desc')->take(3)->get();
		return view('front.media-coverage-detail',['pn'=>'MediaCoverage'])
				->with('news',$news)
				->with('data',$data);
	}
	public function getNewsdetail($id){
		$data = News::select(DB::raw('*,DATE_FORMAT(created_at, "%M %d, %Y") as date_create'))->where('id',$id)->first();
		$news = News::orderBy('id','desc')->take(3)->get();
		return view('front.media-coverage-detail',['pn'=>'MediaNews'])
				->with('news',$news)
				->with('data',$data);
	}
	public function getMediagallery(){
		$photo = Gallery::select(DB::raw('*,DATE_FORMAT(created_at, "%M %d, %Y") as date_create'))->where('type','Photo')->orderBy('id','DESC')->get();
		$video = Gallery::select(DB::raw('*,DATE_FORMAT(created_at, "%M %d, %Y") as date_create'))->where('type','Video')->orderBy('id','DESC')->get();
		return view('front.media-gallery',['pn'=>'MediaGallery'])
				->with('photo',$photo)
				->with('video',$video);
	}
	public function getMediacoverage(Request $request){
		$data = MediaCoverage::select(DB::raw('*,DATE_FORMAT(created_at, "%M %d, %Y") as date_create'))->orderBy('id','DESC')->get();
		return view('front.media-coverage',['pn'=>'MediaCoverage'])
				->with('data',$data);
	}
	public function getMedianews(Request $request){
		$data = News::select(DB::raw('*,DATE_FORMAT(created_at, "%M %d, %Y") as date_create'))->orderBy('id','DESC')->get();
		return view('front.media-news',['pn'=>'MediaNews'])
				->with('data',$data);
	}
	public function getMediabio(){
		$data = Executive::select(DB::raw('*,DATE_FORMAT(created_at, "%M %d, %Y") as date_create'))->orderBy('id','DESC')->get();
		return view('front.media-bio',['pn'=>'MediaCoverage'])
				->with('data',$data);
	}
	public function getMedia(Request $request)
	{
		$data = Images::find(4);
		$exe = Executive::orderBy('id','desc')->take(2)->get();
		$cover = MediaCoverage::select(DB::raw('*,DATE_FORMAT(created_at, "%M %d, %Y") as date_create'))->orderBy('id','desc')->take(10)->get();
		$new = News::select(DB::raw('*,DATE_FORMAT(created_at, "%M %d, %Y") as date_create'))->orderBy('id','desc')->take(10)->get();
		$gallery = Gallery::select(DB::raw('*,DATE_FORMAT(created_at, "%M %d, %Y") as date_create'))->orderBy('id','desc')->take(10)->get();
		return view('front.media',['pn'=>'Media'])
				->with('data',$data)
				->with('cover',$cover)
				->with('new',$new)
				->with('gallery',$gallery)
				->with('exe',$exe);
	}
}
