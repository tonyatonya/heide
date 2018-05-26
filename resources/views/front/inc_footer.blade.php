<?php
	use App\Model\Social;
	$ig = Social::where('type','ig')->first();
		$facebook = Social::where('type','facebook')->first();
		$wc = Social::where('type','wc')->first();
		$wb = Social::where('type','wb')->first();
?>
<footer>

	<div class="container">

		<div class="row">



			<div class="col-sm-4 col-sm-push-4">

				<div class="logo-holder">

					<img src="{{ asset('/public/images/common/mainlogo.svg') }}" class="mainlogo">

				</div>

			</div>

			<div class="col-sm-4 col-sm-pull-4">

				<div class="social-bar">

					<ul>

						<li><a target="blank_" href="{{ ($ig->url!='' ? $ig->url:'#') }}"><img src="{{ asset('/public/images/common/icon-ig.svg') }}" class="ico"></a></li>

						<li><a target="blank_" href="{{ ($facebook->url!='' ? $facebook->url:'#') }}"><img src="{{ asset('/public/images/common/icon-fb.svg') }}" class="ico"></a></li>

						<li><a target="blank_" href="{{ ($wc->url!='' ? $wc->url:'#') }}"><img src="{{ asset('/public/images/common/icon-wc.svg') }}" class="ico"></a></li>

						<li><a target="blank_" href="{{ ($wb->url!='' ? $wb->url:'#') }}"><img src="{{ asset('/public/images/common/icon-wb.svg') }}" class="ico"></a></li>

					</ul>

				</div>

			</div>

			<div class="col-sm-4">

				<div class="row hidden-xs">

					<div class="col-sm-12">

						<ul class="lang-bar">

							<li {{ (Session::get('Lang')=='en' ? 'class=active':'') }}><a href="{{ url('Lang/en') }}">EN</a></li>

							<li {{ (Session::get('Lang')=='ch' ? 'class=active':'') }}><a href="{{ url('Lang/ch') }}">CH</a></li>

						</ul>

					</div>

				</div>

				<div class="row">

					<div class="col-sm-12 copyright-text">

						All Copy Rights Reserved: www.mangochilli.com

					</div>

				</div>



			</div>

		</div>

	</div>

</footer>

<div class="up-btn"><a href="#"><img src="{{ asset('/public/images/common/up-btn.svg') }}"></a></div>

<script type="text/javascript">

	$( document ).ready(function(){

		$('.showgal').click(function(){

			$.get("{{ url('gallery') }}", { id: $(this).attr('id')} ,function(data){

				$('#pop_up').html('');

				$('#bx-thumb-slide').html('');

				$.each( data, function( key, v ) {

				  $('#pop_up').append('<li data-slide-index="'+ key +'"><img src="{{ asset('/images/Gallery/') }}/'+ v.img_name +'"/></li>');

				  $('#bx-thumb-slide').append('<li data-slide-index="'+ key +'"><a href="#"><img src="{{ asset('/images/Gallery/') }}/'+ v.img_name +'"/></a></li>');

				  $('#gallery-head').html(v.name_{{ Session::get('Lang') }});

				});

			}, "json" );

		});



		$('.showvideo').click(function(){
			if($(this).attr('rel')=='news'){
				$.get("{{ url('videonews') }}", { id: $(this).attr('id')} ,function(data){
					$('#video_name').html(data.topic_{{ Session::get('Lang') }});
					$('#iframe1').attr('src',data.video_{{ Session::get('Lang') }});
				}, "json" );
				$('.readmore').find('a').attr('href','{{ url("newsdetail") }}/'+$(this).attr('id'));
				$('.readmore').show();
			}
			else{
				$.get("{{ url('video') }}", { id: $(this).attr('id')} ,function(data){
					$('#video_name').html(data.name_{{ Session::get('Lang') }});
					$('#iframe1').attr('src',data.link_{{ Session::get('Lang') }})
				}, "json" );
				$('.readmore').hide();
			}
		});

		function nl2br(str, is_xhtml) {
				    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
				    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
				}

		$('.showbio').click(function(){
				$.get("{{ url('bio') }}", { id: $(this).attr('id')} ,function(data){
					$('#border-frame').html('<img src="{{ asset('/images/') }}/'+ data.photo +'"/>');
					$('.bio-name').html(data.name_{{ Session::get('Lang') }});
					$('.bio-position').html(data.position_{{ Session::get('Lang') }});
					$('.bio-des').html(data.position_detail_{{ Session::get('Lang') }});
					$('.content-overflow').html('<p>' + nl2br(data.detail_{{ Session::get('Lang') }}).replace(/<br\s*[\/]?>/gi,"</p><p>") + '</p>');
					$("#modal-bio .content-overflow").jScrollPane().data().jsp
				}, "json" );

			});
		$('#close-bio').click(function(){
					$("#modal-bio .content-overflow").jScrollPane().data().jsp.destroy();
					$('#border-frame').html('');
					$('.bio-name').html('');
					$('.bio-position').html('');
					$('.bio-des').html('');
					$('.content-overflow').html('');

		});
		$('#close-video').click(function(){
			$('#video_name').html('');
			$('#iframe1').attr('src','');
		});
		$('#close-gal').click(function(){
			$('#pop_up').html('');
			$('#bx-thumb-slide').html('');
			$('#gallery-head').html('');
		});
	});

</script>

