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
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="feature-banner">
						<div class="openpop-btn">
							<a href="#">
								<img src="images/common/open-popup.jpg">
							</a>
						</div>
						<img src="images/common/feature-banner.jpg" class="feature-banner-img">
					</div>
				</div>
			</div>
		</div>
		<!-- end content here -->
		<?php include('inc_footer.php'); ?>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".openpop-btn a").click(function(e){
				e.preventDefault();
				$(this).addClass("clicked");
			})
		})
	</script>
</body>
</html>