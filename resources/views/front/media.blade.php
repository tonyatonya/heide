<?php
use App\Model\GalleryImg;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mango Chill</title>
	@include('front.inc_head')
	<?php $pagename = ''; ?>
</head>
<body>
	<div id="skrollr-body" class="wrapper">
		@include('front.inc_header')
		<!-- content here-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="cat-mainbanner" style="background-image:url({{ asset('/images/'.$data->img_name) }});"
						data-anchor-target=".cat-mainbanner"
						data-bottom-top="background-position-y:-200px"
						data-top-bottom="background-position-y:0px">
						<img src="{{ asset('/images/'.$data->img_name) }}" class="dummy-image img-responsive">
					</div>
				</div>
			</div>
		</div>
		<div class="container media-container">
			@include('front.inc_medianav')
			<section class="cat-section">
				<div class="row">
					<div class="col-md-12"><h2 class="cat-title">{{ Lang::get('menu.exe') }}</h2></div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 bio-article-list">
						<!-- loop content here -->
						@foreach($exe as $key => $val)
						<div class="row bio-article-row">
							<div class="col-md-4">
								<figure style="background-image: url({{ asset('/public/images/common/img-mark-orange.png') }});">
									<a href="{{ url('biodetail/'.$val->id) }}" id="{{ $val->id }}" class="showbio">
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
						<!-- end loop content here -->
					</div>
				</div>
			</section>
			<div class="row">
				<div class="col-md-12">
					<hr class="red-bar">
				</div>
			</div>
			<section class="cat-section scfade">
				<div class="row">
					<div class="col-md-12"><h2 class="cat-title">{{ Lang::get('menu.media') }}</h2></div>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">
						<div class="item-slider">
							<ul>
								@foreach($cover as $key => $v)
								<li>
									<div class="item-slider-child">
										<figure class="border-frame">
											<a href="{{ url('coveragedetail/'.$v->id) }}"><img src="{{ asset('/images/'.$v->photo) }}"></a>
										</figure>
										<div class="post-meta">
											<img src="{{ asset('/public/images/common/icon-clock.svg') }}"> {{ $v->date_create }}
										</div>
										<a href="{{ url('coveragedetail/'.$v->id) }}">
											<h3>{{ $v->{'topic_'.Session::get('Lang')} }}</h3>
										</a>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</section>
			<div class="row">
				<div class="col-md-12">
					<hr class="red-bar">
				</div>
			</div>
			<section class="cat-section scfade">
				<div class="row">
					<div class="col-md-12"><h2 class="cat-title">{{ Lang::get('menu.news') }}</h2></div>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">
						<div class="item-slider">
							<ul>
								@foreach($new as $key => $v)
								<li>
									<div class="item-slider-child">
										<figure class="border-frame">
											<a href="{{ url('newsdetail/'.$v->id) }}"><img src="{{ asset('/images/'.$v->photo) }}"></a>
										</figure>
										<div class="post-meta">
											<img src="{{ asset('/public/images/common/icon-clock.svg') }}"> {{ $v->date_create }}
										</div>
										<a href="{{ url('newsdetail/'.$v->id) }}">
											<h3>{{ $v->{'topic_'.Session::get('Lang')} }} </h3>
										</a>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</section>
			<div class="row">
				<div class="col-md-12">
					<hr class="red-bar">
				</div>
			</div>
			<section class="cat-section scfade">
				<div class="row">
					<div class="col-md-12"><h2 class="cat-title">{{ Lang::get('menu.gallery') }}</h2></div>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">
						<div class="item-slider">
							<ul>
								@foreach($gallery as $key => $v)
								@if($v->type=='Photo')
								<?php
								$photo = GalleryImg::where('ref_id',$v->id)->first();
								?>
								<li>
									<div class="item-slider-child">
										<figure class="border-frame">
											<a href="{{ url('gallerydetail/'.$v->id) }}" id="{{ $v->id }}" class="showgal">
												@if(count($photo)>0)
												<img src="{{ asset('/images/Gallery/'.$photo->img_name) }}">
												@endif
											</a>
										</figure>
										<div class="post-meta">
											<img src="{{ asset('/public/images/common/icon-clock.svg') }}"> {{ $v->date_create }}
										</div>
										<a href="{{ url('gallerydetail/'.$v->id) }}" id="{{ $v->id }}" class="showgal">
											<h3>{{ $v->{'name_'.Session::get('Lang')} }}</h3>
										</a>
									</div>
								</li>
								@elseif($v->type=='Video')
								<li>
									<div class="item-slider-child">
										<figure class="border-frame">
											<a href="{{ url('videodetail/'.$v->id) }}" class="playbtn showvideo" id="{{ $v->id }}">
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
								</li>
								@endif
								@endforeach
							</ul>
						</div>
					</div>
				</div>
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
		<script type="text/javascript">
			var slideMargin;
			var slideWidth;
			var maxSlides;
			var itemslider;
			$(document).ready(function(){
				if($(window).width()<767){
					slideMargin = 15;
					slideWidth = 320;
					maxSlides = 2;
				}else{
					slideMargin = 40;
					slideWidth = 220;
					maxSlides = 4;
				}
				itemslider = $('.item-slider ul').bxSlider({
	            mode: 'horizontal', //mode: 'fade','horizontal'
	            speed: 300,
	            auto: false,
	            infiniteLoop: true,
	            hideControlOnEnd: true,
	            useCSS: false,
	            minSlides: 1,
	            maxSlides: maxSlides,
	            slideWidth: slideWidth,
	            slideMargin: slideMargin,
	            moveSlides: 1,
	            pager:false,
	        });
			})
			$(window).scroll(function (event) {
				var scroll = $(window).scrollTop();
				$("body").find(".scfade").each(function(){
					var _offset = $(this).offset();
					if(scroll > (_offset.top - $(window).height()) + 50){
						$(this).addClass("scfade-in");
					}
				})
			});
		</script>
		@include('front.inc_media_modal')
	</div>
</body>
</html>