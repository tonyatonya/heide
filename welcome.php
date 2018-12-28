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
				<div class="col-xl-7">
					<div class="welcome-main-fig">
						<figure>
							<img src="images/welcome/imgslide-1.jpg">
						</figure>
						<div class="pin-bar">
							<a href="#" class="pin"><img src="images/welcome/mini-pin.png"></a>
							<a href="https://maps.google.com/?ll=13.738056,100.560782" class="latlon" target="_blank">13.738056,100.560782</a>
						</div>
					</div>
					<div class="welcome-slide-fig">
						<ul>
							<?php for($i=2;$i<5;$i++){ ?>
							<li>
								<img src="images/welcome/imgslide-<?php echo($i);?>.jpg">
								<div class="pin-bar">
									<a href="#" class="pin"><img src="images/welcome/mini-pin.png"></a>
									<a href="https://maps.google.com/?ll=13.738056,100.560782" class="latlon" target="_blank">13.738056,100.560782</a>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 d-flex">
					<div class="row align-self-end">
						<div class="col-xl-12 welcome-content">
							<img src="images/welcome/logo-h.svg" class="welcome-logo">
							<h2>AROUND HIEDE</h2>
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
							<div class="welcome-media-box">
								<iframe src="https://www.youtube.com/embed/4d5_lrn9v-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
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

			});
		</script>
	</div>
</body>
</html>