<!DOCTYPE html>
<html lang="en">
<head>
<title>Mango Chill</title>
@include('front.inc_head')
</head>
<body>
	<div class="wrapper">
	@include('front.inc_header')
	<!-- content here-->
	<div class="container media-container">
		@include('front.inc_medianav')
		<section class="cat-section">
			<div class="row">
				<div class="col-md-12"><h2 class="cat-title">{{ Lang::get('menu.media') }}</h2></div>
				<img src="{{ asset('/public/images/common/cat-page-hr.png') }}" class="img-responsive cat-page-hr">
			</div>
			<div class="row row-eq-height item-list">
			<?php $i=0;?>
			@foreach($data as $key => $v)


				<div class="col-md-3 col-xs-6 item-grid">
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
				</div>
				<?php $i=$i+1;?>
				@if($i==4)
					</div>
					<div class="row row-eq-height item-list">
				@endif
			@endforeach	


			</div>
		</section>
	</div>
	<!-- end content here -->
	@include('front.inc_footer')
	<script type="text/javascript" src="{{ asset('/public/front/js/main.js') }}"></script>
	</div>
</body>
</html>