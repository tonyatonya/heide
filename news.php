<!DOCTYPE html>
<html lang="en">
<head>
<title>Heide Emigre</title>
<?php include('inc_head.php'); ?>
</head>
<body>
	<div id="skrollr-body" class="wrapper">
		<?php include('inc_header.php'); ?>
		<!-- content here-->
		<div class="page-banner" style="background-image:url(images/news/news-banner.jpg);"
			data-anchor-target=".page-banner"
			data-bottom-top="background-position-y:-200px"
			data-top-bottom="background-position-y:0px">
			<img src="images/news/news-banner.jpg" class="dummy">
			<a class="read-btn" href="#">RATEST NEWS <i class="heide-circle-left"></i></a>
			<div class="slide-content">
				<div class="content-box">
					<div class="content-meta">
						<h3 class="content-title">LOREM IPSUM</h3>
						<div class="content-post-date">17 Feb 2017</div>
					</div>
					<div class="content-detail">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
					</div>
				</div>
				<a href="#" class="more-popup">MORE INFO <i class="heide-circle-right"></i></a>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 offset-sm-0 news-list">
					<?php for($i=0;$i<3;$i++){ ?>
					<div class="news-list-child">
						<div class="row">
							<div class="col-sm-5">
								<figure>
									<img src="images/common/update-img1.jpg">
								</figure>
							</div>
							<div class="col-sm-7 content-box">
								<div class="content-meta">
									<h3 class="content-title">LOREM IPSUM</h3>
									<div class="content-post-date">17 Feb 2017</div>
								</div>
								<div class="content-detail">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
									</p>
								</div>
								<div class="content-service-info">
									<ul>
										<li><i class="heide-time"></i>08:00 - 19:30 (Tue-Sun)</li>
										<li><i class="heide-fb"></i><a href="#">Heide-emigre</a></li>
										<li><i class="heide-call"></i><a href="tel:(+66)082.223.2333">(+66)082.223.2333</a></li>
									</ul>
								</div>
								<a href="#" class="view-more more-popup">VIEW MORE <i class="heide-circle-right"></i></a>
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="content-zone">

					</div>

				</div>
			</div>
		</div>
		<!-- end content here -->
		<?php include('inc_footer.php'); ?>
		<link rel="stylesheet" href="css/jquery.bxslider.css">
		<script type="text/javascript" src="js/jquery.bxslider.js"></script>
		<script type="text/javascript">
			var ptop = $(".page-banner").position();
			var slider;
			var sliderThumb
			$(document).ready(function(){
				$(".page-banner .read-btn").click(function(e){
					e.preventDefault();
					$(".page-banner").addClass("openslide");
				})
				$(".slide-content .more-popup").click(function(e){
					e.preventDefault();
					$(".page-banner").removeClass("openslide");
				})


				$(".more-popup").click(function(e){
					e.preventDefault();
					$("#news-modal").modal('show');
				})
				$("#news-modal").on('show.bs.modal', function (e){

					setTimeout(function(){
						slider = $('.post-slider-main ul').bxSlider({
				            mode: 'fade', //mode: 'fade', 'horizontal'
				            speed: 500,
				            auto: false,
				            infiniteLoop: true,
				            hideControlOnEnd: true,
				            useCSS: false,
				            pager:false,
							pagerCustom: '.post-slider-thumb',
				            onSlideAfter: function() {
					            //slider.startAuto();
					        }
				        });

				        sliderThumb = $('.post-slider-thumb ul').bxSlider({
				            mode: 'horizontal', //mode: 'fade', 'horizontal'
				            speed: 300,
				            auto: false,
				            infiniteLoop: true,
				            hideControlOnEnd: true,
				            useCSS: false,
				            minSlides: 3,
							maxSlides: 3,
							slideWidth: '172',
							slideMargin: 0,
							moveSlides: 0,
							pager:false,
							controls:false
				        });

				        $(".post-slider-main").css({
					        'opacity':1,
				        })
				        $(".post-slider-thumb").css({
					        'opacity':1,
				        })


				        $(".post-slider-thumb ul li a").click(function(e){
							e.preventDefault();
							$(".post-slider-thumb ul li a.active").removeClass("active");
							$(this).addClass("active");
							var _index = $(this).parent().attr("data-slide-index");
							console.log("_index = ", _index);
							slider.goToSlide(_index);
						})


					}, 800)

				});
				$('#news-modal').on('hidden.bs.modal', function (e){

				})

				$("#news-modal .btn-close").click(function(){
					setTimeout(function(){
						slider.destroySlider();
						sliderThumb.destroySlider();

						$(".post-slider-thumb ul li").each(function(){
								$(this).find('a').removeClass('active');
							})
							$(".post-slider-thumbul ul li").eq(0).find('a').addClass('active');

						$(".post-slider-main").css({
					        'opacity':0,
				        })
				        $(".post-slider-thumb").css({
					        'opacity':0,
					    })
					}, 300)

				})



			})
			$(window).scroll(function (event) {
			    if($(window).scrollTop() > (ptop.top + ($(".page-banner").height()/4))) {
					$(".page-banner").removeClass("openslide");
				}
			});
		</script>
	</div>


	<div id="news-modal" class="modal fade main-modal">
	    <div class="modal-dialog">
	        <div class="modal-content">
		        <div class="modal-header">
			        <button type="button" class="btn btn-default btn-close" data-dismiss="modal">
		        		<i class="fa fa-close"></i>
		        	</button>
		        </div>
	            <div class="modal-body">
		            <div class="container">
			            <div class="row">
				            <div class="col-sm-7">
					            <!-- Gallery -->
					            <div class="post-slider">
						            <div class="post-slider-main popupslider">
							            <ul>
								            <li data-slide-index="0"><img src="images/aboutus/gal-1.jpg"></li>
								            <li data-slide-index="1"><img src="images/aboutus/gal-2.jpg"></li>
								            <li data-slide-index="2"><img src="images/aboutus/gal-3.jpg"></li>
							            </ul>
						            </div>
						            <div class="post-slider-thumb popupslider">
							            <ul>
								            <li data-slide-index="0"><a href="#"><img src="images/aboutus/gal-1.jpg"></a></li>
								            <li data-slide-index="1"><a href="#"><img src="images/aboutus/gal-2.jpg"></a></li>
								            <li data-slide-index="2"><a href="#"><img src="images/aboutus/gal-3.jpg"></a></li>
							            </ul>
						            </div>
					            </div>
					            <!-- end Gallery -->
				            </div>
				            <div class="col-sm-5 content-box">
					            <div class="content-meta">
									<h3 class="content-title">LOREM IPSUM</h3>
									<div class="content-post-date">17 Feb 2017</div>
									<hr>
								</div>
								<div class="content-detail">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
									</p>
								</div>
								<!--
								<div class="content-service-info">
									<ul>
										<li><i class="heide-time"></i>08:00 - 19:30 (Tue-Sun)</li>
										<li><i class="heide-fb"></i><a href="#">Heide-emigre</a></li>
										<li><i class="heide-call"></i><a href="tel:(+66)082.223.2333">(+66)082.223.2333</a></li>
									</ul>
								</div>
								-->
								<i class="service-type heide-food"></i>
								<!--
									service-type เปลี่ยน Class icon ได้ตามการเลือก ทำ Class รอไว้แล้วตามด้านล่าง
									- heide-art
									- heide-coffee
									- heide-drink
									- heide-food
									- heide-heide-logo
									- heide-map
									- heide-movie
									- heide-museum
									- heide-music
									- heide-sports
								-->
				            </div>
			            </div>
		            </div>
	            </div>
	        </div>
	    </div>
	</div>
</body>
</html>