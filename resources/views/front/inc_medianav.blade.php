<nav class="navbar navbar-default media-nav">

	<div class="container-fluid">

		<!-- Brand and toggle get grouped for better mobile display -->

		<div class="navbar-header">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">

				<span class="sr-only">Toggle navigation</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

			</button>

			<a class="navbar-brand visible-xs" href="#">

				<!--PRESS / MEDIA-->

				{{ Lang::get('menu.press') }}

			</a>

		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

			<ul class="nav navbar-nav">

				<li data-page="EXECUTIVE BIOS">

					<a href="{{ url('mediabio') }}"><!--EXECUTIVE BIOS-->{{ Lang::get('menu.exe') }}</a>

				</li>

				<li data-page="MEDIA COVERAGE">

					<a href="{{ url('mediacoverage') }}"><!-- MEDIA COVERAGE -->{{ Lang::get('menu.media') }}</a>

				</li>

				<li data-page="NEWS RELEASE">

					<a href="{{ url('medianews') }}"><!-- NEWS RELEASE -->{{ Lang::get('menu.news') }}</a>

				</li>

				<li data-page="GALLERY">

					<a href="{{ url('mediagallery') }}"><!-- GALLERY -->{{ Lang::get('menu.gallery') }}</a>

				</li>

			</ul>

		</div><!-- /.navbar-collapse -->

	</div><!-- /.container-fluid -->

</nav>

<script type="text/javascript">

	$(".media-nav li").each(function(){

		if($(this).attr('data-page') == '{{ $pn }}'){

			$(this).addClass('active');

		}



	})

</script>