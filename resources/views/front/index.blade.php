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
	<div id="skrollr-body" class="wrapper">
		@include('front.inc_header')
		<!-- content here-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="home-mainbanner">
						<ul>
						<!--<li class="hasvideo">
							<video id="video-banner" playsinline loop muted >
								<source src="video/vdo-noodle.mp4" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						</li>-->
						@foreach($slide as $k => $v)
						@if($v->type=='image')
						<li><img src="{{ asset('/images/'.$v->name) }}"></li>
						@elseif($v->type=='video')
						<li class="hasvideo">
							<video id="video-banner" playsinline loop muted >
								<source src="{{ asset('/images/'.$v->name) }}" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</li>
							@endif
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="row loop-circle-bar">
				<div class="col-md-12">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<!--
								<div class="loop-circle">
									<img src="{{ asset('/public/front/images/home/loop-circle.svg') }}">
								</div>
								-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<section class="about-section">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">
									<div class="row">
										<div class="col-md-5 col-md-offset-1">
											<div class="about-content">
												<h2>
													{{ $about->{'topic_'.Session::get('Lang')} }}
												</h2>
												<img src="{{ asset('/public/images/common/article-hr.svg') }}" class="article-hr">
<!--
											<p
												data-anchor-target=".about-section"
												data-100-top="opacity:0;transform:translate(0,20px);"
												data-top="opacity:1;transform:translate(0,0);">
											-->
											<p>
												{!! preg_replace('#(?:<br\s*/?>\s*?){2,}#','</p><p>',nl2br($about->{'detail_'.Session::get('Lang')})) !!}
											</p>
										</div>
									</div>
									<!--
									<div class="tuktuk"
										data-anchor-target=".about-section"
										data-100-top="opacity:0; zoom:0.5; transform:translate(-300%,-300%);"
										data-center="opacity:1; zoom:1;transform:translate(-50%,0%);"
										>
									-->
									<div class="tuktuk"
									data-anchor-target=".about-section"
									data-center-top="opacity:0; zoom:0.5; transform:translate(-300%,-300%);"
									data-center="opacity:1; zoom:1;transform:translate(-50%,0%);"
									>
									<img src="{{ asset('/public/front/images/home/tuktuk-animate.gif') }}"  class="img-responsive">
								</div>
								<div class="col-md-5 col-md-offset-1">
									<div class="about-img">
											<!--
											<img src="images/home/about-1.jpg" class="about-img-1"
												data-anchor-target=".about-section"
												data-100-bottom="opacity:0;transform:translate(0,20px);"
												data-top="opacity:1;transform:translate(0,0);"
											>
											<img src="images/home/about-2.jpg" class="about-img-2"
												data-anchor-target=".about-section"
												data-center-top="opacity:0;transform:translate(0,20px);"
												data-top="opacity:1;transform:translate(0,0);"
											>
											<img src="images/home/about-3.jpg" class="about-img-3"
												data-anchor-target=".about-section"
												data-center="opacity:0;transform:translate(0,20px);"
												data-top="opacity:1;transform:translate(0,0);"
											>
										-->
											<!--
											<img src="images/home/about-1.jpg" class="about-img-1"
												data-anchor-target=".about-img-1"
												data--100-bottom="opacity:0;transform:translate(0,50px);"
												data-center-bottom="opacity:1;transform:translate(0,0);"
											>
											<img src="images/home/about-2.jpg" class="about-img-2"
												data-anchor-target=".about-img-1"
												data-center-top="opacity:0;transform:translate(0,20px);"
												data-center-bottom="opacity:1;transform:translate(0,0);"
											>
											<img src="images/home/about-3.jpg" class="about-img-3"
												data-anchor-target=".about-img-2"
												data-center="opacity:0;transform:translate(0,20px);"
												data-100-top="opacity:1;transform:translate(0,0);"
											>
										-->
										<img src="{{ asset('/images/'.$about->img_1) }}" class="about-img-1"
										data-anchor-target=".about-img-1"
										data-bottom="opacity:0;transform:translate(0,50px);"
										data-100-center="opacity:1;transform:translate(0,0);"
										>
										<img src="{{ asset('/images/'.$about->img_2) }}" class="about-img-2"
										data-anchor-target=".about-img-2"
										data-bottom="opacity:0;transform:translate(0,50px);"
										data-center="opacity:1;transform:translate(0,0);"
										>
										<img src="{{ asset('/images/'.$about->img_3) }}" class="about-img-3"
										data-anchor-target=".about-img-3"
										data-bottom="opacity:0;transform:translate(0,50px);"
										data-100-center="opacity:1;transform:translate(0,0);"
										>
											<!--
											<img src="images/home/about-1.jpg" class="about-img-1"
												data-anchor-target=".home-mainbanner"
												data--100-bottom="opacity:0;transform:translate(0,50px);"
												data-center-bottom="opacity:1;transform:translate(0,0);"
											>
											<img src="images/home/about-2.jpg" class="about-img-2"
												data-anchor-target=".about-section"
												data-center-top="opacity:0;transform:translate(0,20px);"
												data-top="opacity:1;transform:translate(0,0);"
											>
											<img src="images/home/about-3.jpg" class="about-img-3"
												data-anchor-target=".about-section"
												data-100-top="opacity:0;transform:translate(0,20px);"
												data-center="opacity:1;transform:translate(0,0);"
											>
										-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<section class="home-section-banner">
				<img src="{{ asset('/images/'.$about_section->img_name) }}"
				data-anchor-target=".home-section-banner"
				data-top="position:fixed;left:0;top:0;z-index:-1"
				data-bottom="position:relative"
				>
				<!-- background-attachment: scroll -->
			</section>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="suggest-bar">
				<img src="{{ asset('/public/front/images/home/suggest-bar.jpg') }}">
			</div>
		</div>
	</div>
	<div class="row suggest-food">
		<div class="col-md-12">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="suggest-food-child">
							<div class="row">
								<div class="col-md-2">
									<div class="chilli-icon"
									data-anchor-target=".home-section-banner"
									data-top="opacity:0;transform:translate(0,20px);"
									data--100-top="opacity:1;transform:translate(0,0);"
									>
									<img src="{{ asset('/public/front/images/home/mangochili.svg') }}">
								</div>
							</div>
							<div class="col-md-4">
								<div class="dish"
								data-anchor-target=".home-section-banner"
								data-top="opacity:0;transform:translate(0,20px);"
								data--100-top="opacity:1;transform:translate(0,0);"
								>
								<img src="{{ asset('images/'.$suggest1->img_name) }}" class="img-responsive">
							</div>
						</div>
						<div class="col-md-5 col-md-offset-1"
						data-anchor-target=".suggest-food-child"
						data-center-top="opacity:0;transform:translate(0,20px);"
						data-100-top="opacity:1;transform:translate(0,0);"
						>
						<h2>{{ $food1->{'topic_'.Session::get('Lang')} }}</h2>
						<img src="{{ asset('/public/images/common/article-hr.svg') }}" class="article-hr">
						<p>
							{!! preg_replace('#(?:<br\s*/?>\s*?){2,}#','</p><p>',nl2br($food1->{'detail_'.Session::get('Lang')})) !!}
						</p>
					</div>
				</div>
			</div>
			<div class="suggest-food-child">
				<div class="row">
					<div class="col-md-3">
						<div class="dish"
						data-anchor-target=".suggest-food-child:first-child"
						data-center="opacity:0;transform:translate(0,20px);"
						data--100-top="opacity:1;transform:translate(0,0);"
						>
						<img src="{{ asset('images/'.$suggest2->img_name) }}" class="img-responsive">
					</div>
				</div>
				<div class="col-md-5"
				data-anchor-target=".suggest-food-child:first-child"
				data-center="opacity:0;transform:translate(0,20px);"
				data--100-top="opacity:1;transform:translate(0,0);"
				>
				<div class="row">
					<div class="col-md-11 col-md-offset-1">
						<h2>{{ $food2->{'topic_'.Session::get('Lang')} }}</h2>
						<img src="{{ asset('/public/images/common/article-hr.svg') }}" class="article-hr">
						<p>
							{!! preg_replace('#(?:<br\s*/?>\s*?){2,}#','</p><p>',nl2br($food2->{'detail_'.Session::get('Lang')})) !!}
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-11 col-md-offset-1">
						<div class="animate-box">
							<img src="{{ asset('/public/front/images/home/animate-item1.svg') }}" class="animate-item"
							data-anchor-target=".suggest-food-child:first-child"
							data-top="opacity:0;transform:translate(-150px,0);"
							data--100-top="opacity:1;transform:translate(0,0);"
							>
							<img src="{{ asset('/public/front/images/home/animate-item2.svg') }}" class="animate-item"
							data-anchor-target=".suggest-food-child:first-child"
							data-top="opacity:0;transform:translate(150px,0);"
							data--100-top="opacity:1;transform:translate(0,0);"
							>
							<img src="{{ asset('/public/front/images/home/animate-item3.svg') }}" class="animate-item"
							data-anchor-target=".suggest-food-child:first-child"
							data-top="opacity:0;transform:translate(0,150px);"
							data--100-top="opacity:1;transform:translate(0,0);"
							>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
<div class="row news-zone">
	<div class="col-md-12">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-1">
					<figure class="border-frame">
						<img src="{{ asset('/public/front/images/home/homepage-imgframe.png') }}" class="homepage-imgframe">
						@if($news->{'video_'.Session::get('Lang')}!='')
						<a href="{{ url('newsdetail/'.$news->id) }}" class="playbtn showvideo" rel="news" id="{{ $news->id }}">
									<!--
										เงื่อนไขของตำแหน่งนี้
										- หน้าไม่ใช่ Video ให้เอา รูปที่มีชื่อ Class playbtn-img ออก และ Tag a เอาชื่อ Class playbtn showvideo ออก
										- ถ้าเป็น Gallery ให้เอาชื่อ Class playbtn showvideo ออกเปลียนเเป็น showgal แทน
										- ถ้าไม่ใช่ทั้ง Video และ Gallery ให้ไปที่หน้า media-news-detail.php หรือ media-coverage-detail.php ตามประเภทของเนื้อหานั้นๆที่แสดงผลอยู่
									-->
									<img src="{{ asset('/images/'.$news->photo) }}" class="img-responsive">
									<img src="{{ asset('/public/images/common/btn-play.svg') }}" class="playbtn-img">
								</a>
								@elseif($news->{'video_'.Session::get('Lang')}=='')
								<a href="{{ url('newsdetail/'.$news->id) }}" id="{{ $news->id }}">
									<img src="{{ asset('/images/'.$news->photo) }}" class="img-responsive">
								</a>
								@endif
							</figure>
						</div>
						<div class="col-md-3 col-md-offset-1"
						data-anchor-target=".news-zone"
						data-100-bottom="opacity:0;transform:translate(0,20px);"
						data-bottom="opacity:1;transform:translate(0,0);"
						>
						<h2>{{ Lang::get('menu.lastes') }}</h2>
						<p>
							{{ $news->{'topic_'.Session::get('Lang')} }}
						</p>
						<div class="readmore more-btn">
							@if($news->{'video_'.Session::get('Lang')}!='')
							<a href="{{ url('newsdetail/'.$news->id) }}" class="showvideo" rel="news" id="{{ $news->id }}">{{ Lang::get('button.click') }}</a>
							@elseif($news->{'video_'.Session::get('Lang')}=='')
							<a href="{{ url('newsdetail/'.$news->id) }}" >{{ Lang::get('button.click') }}</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end content here -->
@include('front.inc_footer')
<link href="{{ asset('/public/front/css/jquery.bxslider.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('/public/front/js/skrollr.js') }}"></script>
<script type="text/javascript" src="{{ asset('/public/front/js/jquery.bxslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('/public/front/js/jquery.fitvids.js') }}"></script>
<script type="text/javascript" src="{{ asset('/public/front/js/main.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){
			//$(".home-mainbanner").fitVids();
			var vdo = document.getElementById("video-banner");
			var slider = $('.home-mainbanner ul').bxSlider({
	            mode: 'horizontal', //mode: 'fade',
	            speed: 800,
	            pause: 5000,
	            auto: true,
	            infiniteLoop: true,
	            hideControlOnEnd: true,
	            useCSS: false,
	            video:true,
	            onSlideAfter: function(newIndex) {
	            	slider.startAuto();
	            	if(newIndex.hasClass("hasvideo") == true){
	            		setTimeout(function(){
	            			vdo.play();
	            		}, 400)
	            	}
	            },
	            onSlideBefore:function(oldIndex) {
	            	if(oldIndex.hasClass("hasvideo") == true){
	            		setTimeout(function(){
	            			vdo.currentTime = 0;
	            		}, 400)
	            	}
	            },
	            onSliderLoad: function() {
	            	vdo.play();
	            }
	        });
			$(".home-section-banner").css({
				'height': $(".home-section-banner img").height()
			})
		})
	$(window).resize(function(){
		$(".home-section-banner").css({
			'height': $(".home-section-banner img").height()
		})
	})
</script>
@include('front.inc_media_modal')
</div>
</body>
</html>