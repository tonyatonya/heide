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
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7">
					<div class="welcome-main-fig">
						<figure>
							<img src="images/welcome/imgslide-1.jpg">
						</figure>
						<div class="pin-bar">
							<a href="#" class="pin"><img src="images/welcome/mini-pin.svg"></a>
							<a href="https://maps.google.com/?ll=13.738056,100.560782" class="latlon" target="_blank">13.738056,100.560782</a>
						</div>
					</div>
					<div class="welcome-slide-fig">
						<ul>
							<?php for($i=2;$i<5;$i++){ ?>
							<li>
								<img src="images/welcome/imgslide-<?php echo($i);?>.jpg">
								<div class="pin-bar">
									<a href="#" class="pin"><img src="images/welcome/mini-pin.svg"></a>
									<a href="https://maps.google.com/?ll=13.738056,100.560782" class="latlon" target="_blank">13.738056,100.560782</a>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="row align-self-end">
						<div class="col-xl-12 welcome-content">
							<img src="images/welcome/logo-h.svg" class="welcome-logo">
							<h2>AROUND HEIDE</h2>
							<hr>
							<p>
								Our Heide Emigré project is offering one of the unique quality lifestyle spaces in Bangkok. The properties where we hosted are available for monthly rent, and are variously located as in Aree neighborhood or in Phra Khanong district. We have our own décor style with an ultimate goal of making a homely and cozy atmosphere. Some of our accomplishments can be seen as ALOFT STUDIO and CANVAS as well as many others.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12 welcome-media">
					<div class="row">
						<div class="col-md-6 offset-md-3 no-gutters">
							<!-- ตำแหน่งนี้แสดงได้ทั้งรูปและ Video -->
							<!-- กรณีมี Video -->
							<div class="welcome-media-box">
								<div id="heide-player">
									<video class="video">
										<source src="images/canvas-tour.mp4" type="video/mp4">
									</video>
									<div class="play-btn">
										<img src="images/welcome/play-btn.svg">
									</div>
								</div>
							</div>
							<!-- กรณีมี image -->
							<!--
							<div class="welcome-media-box image">
								<img src="images/welcome/welcome-bottom-img.jpg">
							</div>
							-->
						</div>
						<div class="col-md-3 d-flex">
							<div class="row align-self-end">
								<div class="col-xl-10 offset-xl-1">
									<p>
										Our Heide Emigré project is offering one of the unique quality lifestyle spaces in Bangkok. The properties where we hosted are available for
									</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>


		<!-- end content here -->
		<?php include('inc_footer.php'); ?>
		<link rel="stylesheet" href="css/jquery.bxslider.css">
		<script type="text/javascript" src="js/jquery.bxslider.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var slider = $('.welcome-slide-fig ul').bxSlider({
		            mode: 'horizontal', //mode: 'fade',
		            speed: 500,
		            auto: true,
		            infiniteLoop: true,
		            hideControlOnEnd: true,
		            useCSS: false,
		            minSlides:1,
		            maxSlides:2,
		            slideWidth:"430px",
		            shrinkItems:true,
		            slideMargin:30,
		            autoHover:true,
					pager:false,
					controls:true,
		            onSlideAfter: function() {
			            slider.startAuto();
			        },
			        onSlideBefore:function(){
				        $(".welcome-slide-fig .pin-bar.active").removeClass("active");
			        }
		        });

		        $(".pin").click(function(e){
			        e.preventDefault();
			        if( $(this).parent().hasClass("active") == false){
				        $(".pin-bar.active").removeClass("active");
				        $(this).parent().addClass("active");
			        }else{
				     	$(this).parent().toggleClass("active");
			        }
		        })


				$('.video').parent().click(function () {
				  if($(this).children(".video").get(0).paused){
					  $(this).children(".video").get(0).play();
					  $(this).children(".play-btn").fadeOut();
				    }else{
					    $(this).children(".video").get(0).pause();
						$(this).children(".play-btn").fadeIn();
				    }
				});


			});
		</script>
	</div>
</body>
</html>