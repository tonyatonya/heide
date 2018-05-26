<?php

  use App\Model\LocationImg;

?>

<!DOCTYPE html>

<html lang="en">

<head>

<title>Mango Chill</title>

@include('front.inc_head')

</head>

<body>

	<div id="skrollr-body" class="wrapper">

	@include('front.inc_header')

	<!-- content here-->

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-12">

				<div class="cat-mainbanner contactus-mainbanner" style="background-image:url({{ asset('/images/'.$banner->img_name) }});"

					data-anchor-target=".cat-mainbanner"

					data-bottom-top="background-position-y:-200px"

					data-top-bottom="background-position-y:0px">

						<img src="{{ asset('/images/'.$banner->img_name) }}" class="dummy-image img-responsive">

					</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-md-4 col-md-offset-1 investor-area">

				<img src="{{ asset('/public/front/images/contactus/elephant.svg') }}" class="el-icon">

				<h2>{{ $investor->{'topic_'.Session::get('Lang')} }}</h2>

				<img src="{{ asset('/public/images/common/article-hr.svg') }}" class="article-hr">

				<p>{!! preg_replace('#(?:<br\s*/?>\s*?){2,}#','</p><p>',nl2br($investor->{'detail_'.Session::get('Lang')})) !!}</p>



				<img src="{{ asset('/public/front/images/contactus/investor-img.jpg') }}" class="img-responsive" style="margin: auto;">

			</div>

			<div class="col-md-4 col-md-offset-2 contactus-area">

				<h2>{{ Lang::get('menu.contact') }}</h2>

				<div class="clear"></div>

				<img src="{{ asset('/public/images/common/article-hr.svg') }}" class="article-hr">

				@foreach($contactus as $key => $val)

					<div class="branch">

						<div class="branch-name">{{ $val->{'office_'.Session::get('Lang')} }}</div>

						<div class="branch-company">{{ $val->{'company_'.Session::get('Lang')} }}</div>

						<div class="branch-contact">
							<div class="row">
								<div class="col-sm-10">
									<ul class="bullet-mark">

										<li>{!! nl2br($val->{'address_'.Session::get('Lang')}) !!}</li>

										<li>Phone: {{ $val->tel }} </li>

										<li>Email: <a href="{{ $val->email }}">{{ $val->email }}</a></li>

									</ul>
								</div>
							</div>

						</div>

					</div>

				@endforeach

			</div>

			<div class="clear"></div>

		</div>

	</div>

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-12">

				<section class="location-section">

					<div class="location-header">

						<img src="{{ asset('/public/front/images/contactus/location-pin.png') }}" class="pin img-responsive">

						<div class="clear"></div>

						<h2>{{ Lang::get('menu.location') }}</h2>

					</div>

					<div class="map-bg"

						data-anchor-target=".location-header"

						data-bottom-top="transform: translate(0,-20%)"

						data-top-bottom="transform: translate(0,0)">

						<img src="{{ asset('/public/front/images/contactus/map-bg.png') }}">

					</div>

					<div class="location-gallery">

						<div class="row">

						  @foreach($location as $k => $l)

						  	<?php

						  		$img = LocationImg::where('ref_id',$l->id)->get();

						  	?>

							<div class="col-md-4">

								<div class="location-gallery-child">

									<div class="location-gallery-slider">

										<ul>

											@foreach($img as $k => $val)

												<li><img src="{{ asset('/images/location/'.$val->img_name) }}"></li>

											@endforeach

										</ul>

									</div>

									<div class="row">

										<div class="col-md-10 col-md-offset-2 col-xs-10 col-xs-offset-1">

											<div class="location-profile">

												<h3><img class="ico" src="{{ asset('/public/images/common/bullet-mark.svg') }}">{{ $l->{'location_'.Session::get('Lang')} }}</h3>

												<ul class="location-profile-contact">

													<li><img src="{{ asset('/public/front/images/contactus/ico-address.svg') }}" class="ico">{!! nl2br($l->{'address_'.Session::get('Lang')}) !!}</li>

													<!--

													<li><img src="images/contactus/ico-time.svg" class="ico">11:00 - 22:00</li>

													<li><img src="images/contactus/ico-phone.svg" class="ico">02-222-2222</li>

													-->

												</ul>

												<!--

												<ul class="social-bar">

													<li><a href="#"><i class="fa fa-instagram"></i></a></li>

													<li><a href="#"><i class="fa fa-facebook"></i></a></li>

													<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>

												</ul>

												-->

											</div>

										</div>

										<!--

										<div class="col-xs-10 col-xs-offset-1">

											<div class="location-type">

												<img src="images/contactus/location-type1.png">

											</div>

										</div>

										-->

									</div>

								</div>

							</div>

							@endforeach

						</div>

					</div>

				</section>



			</div>

		</div>

	</div>

	<!-- end content here -->

	@include('front.inc_footer')

	<link href="{{ asset('/public/front/css/jquery.bxslider.css') }}" rel="stylesheet">

	<script type="text/javascript" src="{{ asset('/public/front/js/skrollr.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.bxslider.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/main.js') }}"></script>

	<script type="text/javascript">

		$(document).ready(function(){

			var slider = $('.location-gallery-slider ul').bxSlider({

			            mode: 'horizontal', //mode: 'fade',

			            speed: 300,

			            auto: false,

			            infiniteLoop: true,

			            hideControlOnEnd: true,

			            useCSS: false,

			            pager:false,

			            onSlideAfter: function() {

				            //slider.startAuto();

				        }

			        });

		})

	</script>

	</div>

</body>

</html>