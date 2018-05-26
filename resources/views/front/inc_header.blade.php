<?php 

	//use Session;

?>

<header>

	<nav class="navbar navbar-default">

			<div class="container">

				<!-- Brand and toggle get grouped for better mobile display -->

				<div class="navbar-header">

					<button type="button" class="navbar-toggle">

						<span class="sr-only">Toggle navigation</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

					</button>

					<a class="navbar-brand" href="{{ url('/') }}">

						<img src="{{ asset('/public/images/common/mainlogo.svg') }}" class="mainlogo">

					</a>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<div class="close-menu">

						<a href="#"><img src="{{ asset('/public/images/common/x.svg') }}"></a>

					</div>

					<ul class="nav navbar-nav navbar-right">

						<li><a href="{{ url('/') }}">{{ Lang::get('menu.home') }}</a></li>

						<li><a href="{{ url('concept') }}">{{ Lang::get('menu.concept') }}</a></li>

						<li><a href="{{ url('media') }}">{{ Lang::get('menu.press') }}</a></li>

						<li><a href="{{ url('contactus') }}">{{ Lang::get('menu.contact') }}</a></li>

						<li>

							<ul class="nav-lang">

								<li {{ (Session::get('Lang')=='en' ? 'class=active':'') }}>

									<a href="{{ url('Lang/en') }}">EN</a>

								</li>

								<li {{ (Session::get('Lang')=='ch' ? 'class=active':'') }}>

									<a href="{{ url('Lang/ch') }}">CN</a>

								</li>

							</ul>

						</li>

					</ul>



				</div><!-- /.navbar-collapse -->

			</div><!-- /.container-fluid -->

		</nav>

</header>