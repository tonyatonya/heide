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

		<section class="news-grid">

			<div class="row">

				<div class="col-md-7 col-md-offset-1">
					
					<div class="cat-name">

						@if($pn=='MediaCoverage')

						{{ Lang::get('menu.media') }}

						@elseif($pn=='MediaNews')

						{{ Lang::get('menu.news') }}

						@endif

					</div>

					<h2 class="news-title">{{ $data->{'topic_'.Session::get('Lang')} }}</h2>
					
					<div class="post-meta"><img src="{{ asset('/public/images/common/icon-clock.svg') }}"> {{ $data->date_create }}</div>
					
				</div>

			</div>

			<div class="row">

				<div class="col-md-7 col-md-offset-1">


					@if($pn=='MediaNews' && $data->{'video_'.Session::get('Lang')} !='')
					<div class="video-frame">
		                	<iframe src="{{ $data->{'video_'.Session::get('Lang')} }}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
		            </div>
		            @endif
					<div class="news-content">

							{!! $data->{'detail_'.Session::get('Lang')} !!}

					</div>

					<div class="readmore more-btn" style="margin-bottom: 30px; text-align: center;">
						@if($pn=='MediaCoverage')

						<a style="float: none;" href="{{ url('mediacoverage') }}">{{ Lang::get('button.back') }}</a>

						@elseif($pn=='MediaNews')

						<a style="float: none;" href="{{ url('medianews') }}">{{ Lang::get('button.back') }}</a>

						@endif
						

					</div>

				</div>

				<div class="col-md-3">

					<div class="row">

						<div class="col-md-11 col-md-offset-1">

							<section class="news-sidebar">

								<div class="cat-name"><!-- LATEST NEWS -->LATEST NEWS</div>

								@foreach($news as $key => $v)
									@if($pn=='MediaCoverage')
										<a class="news-link" href="{{ url('coveragedetail/'.$v->id) }}">
											{{ $v->{'topic_'.Session::get('Lang')} }}
										</a>
									@elseif($pn=='MediaNews')
										<a class="news-link" href="{{ url('newsdetail/'.$v->id) }}">
											{{ $v->{'topic_'.Session::get('Lang')} }}
										</a>
									@endif
								<div class="hr">

									<hr>

								</div>

								@endforeach

							</section>

						</div>

					</div>

				</div>

			</div>

		</section>

	</div>

	<!-- end content here -->

	@include('front.inc_footer')

	<script type="text/javascript" src="{{ asset('/public/front/js/main.js') }}"></script>

	</div>

</body>

</html>