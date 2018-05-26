<!DOCTYPE html>
<html lang="en">
<head>
<title>Mango Chill</title>
@include('front.inc_head')
</head>
<body>
	<div class="wrapper">
	@include('front.inc_header')
		<div class="container  media-container">
			@include('front.inc_medianav')
			<div class="row">
				<div class="col-md-12">
		        	<h2 class="popup-h2">{{ $gallery->{'name_'.Session::get('Lang')} }}</h2>
	        	</div>
	        	<div class="row">
	                <div class="col-md-8 col-md-offset-2">
		                <div class="video-frame">
		                	<iframe src="{{ $gallery->{'link_'.Session::get('Lang')} }}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
		                </div>
		                <div class="readmore more-btn" style="margin-top:30px; margin-bottom: 30px; text-align: center;">
							<a style="float: none;" href="{{ url('mediagallery') }}">{{ Lang::get('button.back') }}</a>
						</div>
	                </div>
                </div>
			</div>
		</div>
	@include('front.inc_footer')
	<link href="{{ asset('/public/front/css/jquery.bxslider.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.bxslider.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/public/front/js/main.js') }}"></script>
	</div>
</body>
</html>


