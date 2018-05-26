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
            <div class="col-md-4 col-md-offset-1">
	            <div class="bio-frame">
                <figure class="border-frame">
					<img src="{{ asset('/images/'.$data->photo) }}"/>
				</figure>
	            </div>
				<div class="bio-profile">
					<div class="bio-name">{{ $data->{'name_'.Session::get('Lang')} }}</div>
					<div class="bio-position">{{ $data->{'position_'.Session::get('Lang')} }}</div>
					<div class="bio-des">{{ $data->{'position_detail_'.Session::get('Lang')} }}</div>

				</div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <article class="article-concept-content">
					<div class="content-overflow">
						<p>{!! preg_replace('#(?:<br\s*/?>\s*?){2,}#','</p><p>',nl2br($data->{'detail_'.Session::get('Lang')})) !!}</p>

						<div class="readmore more-btn" style="margin-top: 30px;">
							<a href="{{ url('mediabio') }}">{{ Lang::get('button.back') }}</a>
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


