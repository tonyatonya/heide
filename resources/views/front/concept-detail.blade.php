<!DOCTYPE html>
<html lang="en">
<head>
<title>Mango Chill</title>
@include('front.inc_head')
</head>
<body>
	<div class="wrapper">
	@include('front.inc_header')
	<div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
	                <div class="col-md-10">
		                <div class="pop-slider mango-slider mango-slider-expage">
			                <ul>
			                	@foreach($img as $key=> $v)
				                	<li data-slide-index="{{ $key }}"><img src="{{ asset('/images/'.$v->img_name) }}"/></li>
				                @endforeach
			                </ul>
		                </div>
		                <div class="bx-thumb mango-slider-thumb">
			                <ul>
			                	@foreach($img as $key=> $v)
				                <li data-slide-index="{{ $key }}"><a href="#"><img src="{{ asset('/images/'.$v->img_name) }}"/></a></li>
				                @endforeach
			                </ul>
		                </div>
	                </div>
                </div>
            </div>
            <div class="col-md-5">
                <article class="article-concept-content">
					<div class="type-ico">
						<img src="{{ asset('/images/type/'.$foodtype->img_name) }}">
					</div>
					<div class="content-overflow">
						<h2>{{ $concept->topic_main }}</h2>
						<h3>{{ $concept->{'topic_'.Session::get('Lang')} }}</h3>
						<img src="{{ asset('/public/images/common/article-hr.svg') }}" alt="article-hr" class="article-hr">
						<p>
							{!! preg_replace('#(?:<br\s*/?>\s*?){2,}#','</p><p>',nl2br($concept->{'detail_'.Session::get('Lang')})) !!}	
						</p>

						<div class="readmore more-btn">
							<a href="{{ url('concept') }}">{{ Lang::get('button.back') }}</a>
						</div>
					</div>
				</article>

            </div>
        </div>
    </div>
	@include('front.inc_footer')
	<link href="{{ asset('/public/front/css/jquery.bxslider.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.bxslider.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/public/front/js/main.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){


			var slider;
			var sliderthumb;
			slider = $('.pop-slider ul').bxSlider({
					            mode: 'fade', //mode: 'fade','horizontal'
					            speed: 500,
					            auto: false,
					            infiniteLoop: true,
					            hideControlOnEnd: true,
					            useCSS: false,
					            controls:false,
					            pager:false,
					            pagerCustom: 'sliderthumb',
					        });

					sliderthumb = $('.bx-thumb ul').bxSlider({
			            mode: 'horizontal', //mode: 'fade','horizontal'
			            speed: 300,
			            auto: false,
			            infiniteLoop: true,
			            hideControlOnEnd: true,
			            useCSS: false,
			            minSlides: 4,
						maxSlides: 5,
						slideWidth: 175,
						slideMargin: 7,
						moveSlides: 1,
						pager:false,
			            onSlideAfter: function() {
				            //slider.startAuto();
				        }
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


