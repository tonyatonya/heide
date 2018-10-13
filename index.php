<!DOCTYPE html>
<html lang="en">
<head>
<title>Heide Emigre</title>
<?php include('inc_head.php'); ?>
</head>
<body>
	<div class="wrapper">
		<?php include('inc_header.php'); ?>
		<!-- content here-->
		<section class="feature-banner">
			<div class="openpop-btn">
				<a href="#">
					<img src="images/common/open-popup.jpg">
				</a>
			</div>
			<img src="images/common/feature-banner.jpg" class="feature-banner-img">
			<div class="feature-popup">
				<a href="#" class="feature-popup-close"><i class="fa fa-close"></i></a>
				<!-- content popup -->
				<img src="images/common/logo-circle.svg" class="popup-logo">
				<h2>ABOUT HEIDE EMIGRE</h2>
				<p>Home is always the place that people feel the most relax and comfortable. Behind each of HEIDE ÉMIGRÉ’s project, we’d like to create beautiful space that people can associate with and also give them inspiration. It’s all about their wonderful experience when they are away or emigrate from where they belong.</p>
				<!-- end content popup -->
			</div>
		</section>
		<section class="enq">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="logo-written">
							<img src="images/common/heide-written.svg">
						</div>
					</div>
					<div class="offset-sm-3 col-sm-4 enq-form-pos">
						<a href="#" class="enq-btn">
							<i class="icon"></i> INSPECT & ENQUIRE
						</a>
						<p>
							To enquire further about our properties, please fill
the form below. We'll try to respond within 48 hrs.
						</p>
						<div class="enq-form-wrapper">
							<div class="enq-form">
								<div class="row enq-btn-list row-eq-height">
									<div class="col-4">
										<a href="#" class="btn-list-child room">
											<p>SELECT ROOM</p>
											<img src="images/common/enq-btn-hr.png" width="14" height="3">
										</a>
									</div>
									<div class="col-4">
										<a href="#" class="btn-list-child in">
											<ul class="top-border">
												<li></li>
												<li></li>
												<li></li>
											</ul>
											<p>CHECK- IN</p>
											<img src="images/common/enq-btn-hr.png" width="14" height="3">
										</a>
									</div>
									<div class="col-4">
										<a href="#" class="btn-list-child out">
											<ul class="top-border">
												<li></li>
												<li></li>
												<li></li>
											</ul>
											<p>CHECK- OUT</p>
											<img src="images/common/enq-btn-hr.png" width="14" height="3">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="option-holder">
											<div class="select-room">
												<ul>
													<?php for($i=0;$i<10;$i++){ ?>
													<li><a href="#">Room Name</a></li>
													<?php } ?>
												</ul>
											</div>
											<div class="select-in">
												<!-- calendar -->
												<!-- end calendar -->
											</div>
											<div class="select-out">
												<!-- calendar -->
												<!-- end calendar -->
											</div>
										</div>
										<form>
											<input class="form-control" type="text" placeholder="E-MAIL">
											<textarea class="form-control" placeholder="MESSAGE"></textarea>
											<input type="submit" value="SEND">
										</form>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="feature-update-section">
			<div class="container">
				<div class="row row-eq-height">
					<div class="col-md-8 feature-update">
						<div class="row">
							<div class="col-sm-6"><h2>HEIDE UPDATES</h2></div>
							<div class="col-sm-6"><a href="#" class="see-all">SEE ALL</a></div>
						</div>
						<div class="row">
							<!-- loop Content -->
							<?php for($i=0;$i<2;$i++){ ?>
							<div class="col-sm-6">
								<div class="feature-update-box">
									<figure>
									<a href="#"><img src="images/common/update-img1.jpg" alt="update-img1" width="350" height="315"></a>
									</figure>
									<div class="feature-update-box-meta">
										<a href="#">
											<h3>LOREM IPSUM</h3>
											<p>LOREM IPSUM DOLOR SITAMET, CONSECTETULAOE</p>
										</a>
										<a href="#" class="more">MORE INFO <i class="heide-circle-right"></i></a>
									</div>
								</div>
							</div>
							<?php } ?>
							<!-- end loop Content -->
						</div>

					</div>
					<div class="col-md-4 feature-update-banner">
							<figure>
								<img src="images/common/update-img3.jpg">
								<figcaption>HOME AWAY FROM HOME</figcaption>
							</figure>
					</div>
				</div>
			</div>
		</section>
		<section class="property">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="property-banner">
							<img src="images/common/aloft-feature-banner.jpg" class="main-img">
							<div class="property-info">
								<div class="property-info-logo">
									<img src="images/common/logo-aloft.svg">
								</div>
								<a href="#" class="more">VISITE SITE <i class="icon"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="property-banner">
							<img src="images/common/canvas-feature-banner.jpg" class="main-img">
							<div class="property-info">
								<div class="property-info-logo">
									<img src="images/common/logo-canvas.svg">
								</div>
								<a href="#" class="more">VISITE SITE <i class="icon"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="property-banner">
							<img src="images/common/studio4-feature-banner.jpg" class="main-img">
							<div class="property-info">
								<div class="property-info-logo">
									<img src="images/common/logo-studio4.svg">
								</div>
								<a href="#" class="more">VISITE SITE <i class="icon"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="feature-map">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 offset-sm-1">
						<h2>BANGKOK MAP</h2>
						<p>
							When city people meant “homes” in the nineteenth century, they were talking about the charms of the Brooklyn brownstone. – The New Yorker, 1977 Check Availability
						</p>
					</div>
					<div class="col-sm-12">
						<img src="images/common/feature-map.jpg" class="main-map">
					</div>
				</div>
			</div>
		</section>

		<!-- end content here -->
		<?php include('inc_footer.php'); ?>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".openpop-btn a").click(function(e){
				e.preventDefault();
				$(".feature-banner").addClass("openpopup");
			})
			$(".feature-popup-close").click(function(e){
				e.preventDefault();
				$(".feature-banner").removeClass("openpopup");
			})

			$(".enq-btn").click(function(e){
				e.preventDefault();
				$(this).toggleClass("downed");
				$(".enq-form-wrapper").toggleClass("show");
			})
			$(".btn-list-child").click(function(e){
				e.preventDefault();
				if($(this).hasClass("room")==true){
					$(".select-room").toggleClass("open");
				}else if($(this).hasClass("in")==true){

				}else{

				}

			})
		})
	</script>
</body>
</html>