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
		<div class="container-fluid prop-list">
			<?php for($i=0;$i<3;$i++){ ?>
			<div class="row prop-list-child" id="propid-<?php echo($i); ?>">
				<div class="col-sm-7 prop-list-child-grid">
					<div class="prop-img" style="background-image: url(images/properties/properties-1.jpg);"
						data-anchor-target="#propid-<?php echo($i); ?>"
						data-bottom-top="background-position-y:-200px"
						data-top-bottom="background-position-y:0px"
				>
						<img src="images/properties/properties-1.jpg" class="dummy">
					</div>
				</div>
				<div class="col-sm-5 prop-list-child-grid">
					<div class="prop-detail">
						<img src="images/properties/logo-aloft.svg" class="prop-logo">
						<p>
							An exceptional traditional Belgravia Grade II listed house built in 1837 that combines features rarely found all in the same home. Particularly wide at 30ft with 3 windows it offers rooms of grand proportions perfectly suited for entertainment and modern living. South facing garden, underground parking for 2 cars, private street direct drive-in entrance and lift are just some of the reasons it would be hard to find another property like this in the heart of London’s Belgravia neighbourhood.
						</p>
						<a href="#" class="view-more">VIEW MORE</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<!-- end content here -->
		<?php include('inc_footer.php'); ?>
	</div>
</body>
</html>