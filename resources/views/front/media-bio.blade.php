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

				<div class="col-md-12"><h2 class="cat-title">{{ Lang::get('menu.exe') }}</h2></div>

				<img src="{{ asset('/public/images/common/cat-page-hr.png') }}" class="img-responsive cat-page-hr">

			</div>

			<div class="row">



				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 bio-article-list">

					@foreach($data as $key => $val)

					<div class="row bio-article-row">

						<div class="col-md-4">

							<figure style="background-image: url({{ asset('/public/images/common/img-mark-orange.png') }});">

								<a href="{{ url('biodetail/'.$val->id) }}" class="showbio" id="{{ $val->id }}">

									<img src="{{ asset('/images/'.$val->photo) }}">

								</a>

							</figure>

						</div>

						<div class="col-md-8">

							<div class="row">

								<div class="col-md-11 col-md-offset-1">

									<h2>{{ $val->{'name_'.Session::get('Lang')} }}</h2>

									<div class="position">{{ $val->{'position_'.Session::get('Lang')} }}</div>

									<div class="bio-des">{{ $val->{'position_detail_'.Session::get('Lang')} }}</div>

									<img src="{{ asset('/public/images/common/gold-hr.svg') }}" class="gold-hr article-hr">

									<h3>{{ $val->{'topic_'.Session::get('Lang')} }}</h3>

									<p>{{ $val->{'introduction_'.Session::get('Lang')} }}</p>

									<div class="readmore">

										<a href="{{ url('biodetail/'.$val->id) }}" id="{{ $val->id }}" class="showbio">{{ Lang::get('button.readmore') }} <img src="{{ asset('/public/images/common/readmore-arrow.svg') }}"></a>

									</div>

								</div>

							</div>

						</div>

					</div>

					@endforeach

				</div>

			</div>

		</section>

	</div>

	<!-- end content here -->

	@include('front.inc_footer')

	<link href="{{ asset('/public/front/css/jquery.jscrollpane.css') }}" rel="stylesheet">

	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.jscrollpane.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.mousewheel.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/mwheelIntent.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/main.js') }}"></script>

	@include('front.inc_media_modal')

	</div>

</body>

</html>