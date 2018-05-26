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
		        	<h2 class="popup-h2">{{ $gallery->{'name_'.Session::get('Lang')} }} </h2>
	        	</div>
	        	<div class="row">
	                <div class="col-md-8 col-md-offset-2">
		                <div class="pop-slider mango-slider">
			                <ul>
			                	@foreach($img as $k=> $v)
				                	<li data-slide-index="{{ $k }}"><img src="{{ asset('/images/Gallery/'.$v->img_name) }}"></li>
				                @endforeach
			                </ul>
		                </div>
		                <div class="bx-thumb mango-slider-thumb">
			                <ul>
			                	@foreach($img as $k=> $v)
				                <li data-slide-index="{{ $k }}"><a href="#"><img src="{{ asset('/images/Gallery/'.$v->img_name) }}"></a></li>
				                @endforeach
			                </ul>
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
	<script type="text/javascript">
		$(document).ready(function(){
			//slider
			slider = $('.pop-slider ul').bxSlider({
			            mode: 'fade', //mode: 'fade','horizontal'
			            speed: 500,
			            auto: false,
			            infiniteLoop: true,
			            hideControlOnEnd: true,
			            useCSS: false,
			            pager:false,
			            pagerCustom: 'sliderthumb',
			            onSlideAfter: function() {
							var curr = slider.getCurrentSlide();
							console.log('curr = ', curr);
							$(".bx-thumb ul li").each(function(){
								$(this).find('a').removeClass('active');
								if($(this).attr("data-slide-index") == curr){
									$(this).find('a').addClass('active');
								}
							})
				        }
			        });

			sliderthumb = $('.bx-thumb ul').bxSlider({
	            mode: 'horizontal', //mode: 'fade','horizontal'
	            speed: 300,
	            auto: false,
	            infiniteLoop: true,
	            hideControlOnEnd: true,
	            useCSS: false,
	            minSlides: 4,
				maxSlides: 4,
				slideWidth: 100,
				slideMargin: 10,
				moveSlides: 1,
				pager:false,
				controls:false,
	        });

	        $(".bx-thumb ul li a").click(function(e){
				e.preventDefault();
				$(".bx-thumb ul li a.active").removeClass("active");
				$(this).addClass("active");
				var _index = $(this).parent().attr("data-slide-index");
				console.log("_index = ", _index);
				slider.goToSlide(_index);
			})
		})
	</script>
	</div>
</body>
</html>


