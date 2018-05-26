<?php 

	use App\Model\GalleryImg;

?>

<!DOCTYPE html>

<html lang="en">

<head>

<title>Mango Chill</title>

@include('front.inc_head')

</head>

<body>

	<div class="wrapper">

	@include('front.inc_header')

	<!-- content here-->

	<div class="container media-container">

		@include('front.inc_medianav')

		<section class="cat-section">

			<div class="row">

				<div class="col-md-12"><h2 class="cat-title">{{ Lang::get('menu.gallery') }}</h2></div>

				<img src="{{ asset('/public/images/common/cat-page-hr.png') }}" class="img-responsive cat-page-hr">

			</div>

			<div class="row row-section">

				<div class="col-md-12">

					<h3>{{ Lang::get('menu.image') }}</h3>

				</div>

			</div>

			<div class="row row-eq-height item-list">

			<?php $i=0;?>

			@foreach($photo as $key => $v)

				<?php 

					$photo = GalleryImg::where('ref_id',$v->id)->first();

				?>

				<div class="col-md-3 col-xs-6 item-grid">

					<div class="item-slider-child">

						<figure class="border-frame">

							<a href="{{ url('gallerydetail/'.$v->id) }}" class="showgal" id="{{ $v->id }}">
								@if(count($photo)>0)
									<img src="{{ asset('/images/Gallery/'.$photo->img_name) }}">
								@endif
							</a>

						</figure>

						<div class="post-meta">

							<img src="{{ asset('/public/images/common/icon-clock.svg') }}"> {{ $v->date_create }}

						</div>

						<a href="{{ url('gallerydetail/'.$v->id) }}" class="showgal" id="{{ $v->id }}">

							<h3>{{ $v->{'name_'.Session::get('Lang')} }}</h3>

						</a>

					</div>

				</div>

				<?php $i=$i+1;?>

				@if($i==4)

					</div>

					<div class="row row-eq-height item-list">

				@endif

			@endforeach	

			</div>

		</section>

		<section class="cat-section">

			<div class="row row-section">

				<div class="col-md-12">

					<h3>{{ Lang::get('menu.vdo') }}</h3>

				</div>

			</div>

			<div class="row row-eq-height item-list">

			<?php $i=0;?>

			@foreach($video as $key => $v)

				<div class="col-md-3 col-xs-6 item-grid">

					<div class="item-slider-child">

						<figure class="border-frame">

							<a href="{{ url('videodetail/'.$v->id) }}" id="{{ $v->id }}" class="playbtn showvideo">

								<img src="{{ asset('/images/'.$v->photo) }}">

								<img src="{{ asset('/public/images/common/btn-play.svg') }}" class="playbtn-img">

							</a>

						</figure>

						<div class="post-meta">

							<img src="{{ asset('/public/images/common/icon-clock.svg') }}"> {{ $v->date_create }}

						</div>

						<a href="{{ url('videodetail/'.$v->id) }}" class="showvideo" id="{{ $v->id }}">

							<h3>{{ $v->{'name_'.Session::get('Lang')} }}</h3>

						</a>

					</div>

				</div>

				<?php $i=$i+1;?>

				@if($i==4)

					</div>

					<div class="row row-eq-height item-list">

				@endif

			@endforeach	

		</section>

	</div>

	<!-- end content here -->

	@include('front.inc_footer')

	

	



	<link href="{{ asset('/public/front/css/jquery.jscrollpane.css') }}" rel="stylesheet">

	<link href="{{ asset('/public/front/css/jquery.bxslider.css') }}" rel="stylesheet">

	<script type="text/javascript" src="{{ asset('/public/front/js/skrollr.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.jscrollpane.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.mousewheel.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/mwheelIntent.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.bxslider.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.fitvids.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/main.js') }}"></script>

	@include('front.inc_media_modal')

	</div>

</body>

</html>