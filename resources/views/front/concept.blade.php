<!DOCTYPE html>

<html lang="en">

<head>

<title>Mango Chill</title>

@include('front.inc_head')

</head>

<body>

	<div id="skrollr-body" class="wrapper">

	@include('front.inc_header')

	<!-- content here-->

	<div class="container-fluid">

	  @foreach($data as $key => $val)
	  	<?php
	  		if($key % 2==0){
	  			$r='right';

	  			$l='left';

	  			$f='';

	  			$p = '';

	  		}

	  		else{

	  			$r = 'left';

	  			$l='right';

	  			$f = 'col-md-push-5';

	  			$p='col-md-pull-7';

	  		}

	  	?>

		<section id="concept-{{ $key+1 }}" class="article-concept">

			<div class="row row-eq-height article-concept-row">

				<div class="col-md-7 {{ $f }} article-concept-child">

					<figure class="visible-xs">

						<img src="{{ asset('images/'.$val->photo) }}">

					</figure>

						<div class="bg hidden-xs" style="background-image:url({{ asset('images/'.$val->photo) }});"

						data-anchor-target="#concept-{{ $key+1 }}"

						data-bottom-top="background-position-y:-100px"

						data-top-bottom="background-position-y:0px"

						></div>

					<img src="{{ asset('/public/front/images/concept/sharp-'.$l.'.svg') }}" class="sharp sharp-{{ $l }} hidden-xs">

				</div>

				<div class="col-xs-10 col-xs-offset-1 col-md-5 {{ $p }} col-md-offset-0 article-concept-child">

					<div class="row">

						<div class="col-md-8 col-md-offset-2">

							<article class="article-concept-content">

								<div class="content-mark mark-{{ $r }}">

									<img src="{{ asset('/public/images/common/contentmark-'.$r.'.png') }}">

								</div>

								<h2>{{ $val->topic_main }}</h2>

								<h3>{{ $val->{'topic_'.Session::get('Lang')} }}</h3>

								<img src="{{ asset('/public/images/common/article-hr.svg') }}" alt="article-hr" class="article-hr">

								<p>

									{{ $val->{'introduction_'.Session::get('Lang')} }}

								</p>

								<div class="readmore more-btn">

									<a href="{{ url('conceptspecs/'.$val->id) }}" id="{{ $val->id }}" class="show-detail" >{{ Lang::get('button.readmore') }}</a>

								</div>

							</article>

						</div>

					</div>

				</div>

			</div>

		</section>

		@if($key==0)

			<div class="row">

				<div class="col-xs-12">

					<section class="sauce">

						<div class="container">

							<div class="row">

								<div class="col-md-12">
									@if(Session::get('Lang')=='ch')
									<h2 class="title-brush">泰式粿条的蘸料</h2>
									<img src="{{ asset('/public/images/common/article-hr.svg') }}" class="article-hr">
									<div class="clear"></div>
									<ul>
										<li>
											<img src="{{ asset('/public/front/images/concept/nam-jim-gai.png') }}" class="sauce-img">
											<p>甜鸡酱</p>
											<p class="caption"></p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/nam-pla-phrik.png') }}" class="sauce-img">
											<p>辣鱼露</p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/nam-jim-jaew.png') }}" class="sauce-img">
											<p>秘制烤肉酱</p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/nam-jim-seafood.png') }}" class="sauce-img">
											<p>海鲜酱</p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/chili-flakes.png') }}" class="sauce-img">
											<p>干辣椒粉</p>
											<p class="caption"></p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/karen-chili-oil-sauce.png') }}" class="sauce-img">
											<p>辣椒油酱</p>
											<p class="caption"></p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/banana-chili-sauce.png') }}" class="sauce-img">
											<p>泡椒酸辣酱</p>
											<p class="caption"></p>
										</li>
									</ul>
									@else
									<h2 class="title-brush">THAI SAUCES</h2>
									<img src="{{ asset('/public/images/common/article-hr.svg') }}" class="article-hr">
									<div class="clear"></div>
									<ul>
										<li>
											<img src="{{ asset('/public/front/images/concept/nam-jim-gai.png') }}" class="sauce-img">
											<p>Nam Jim Gai</p>
											<p class="caption">(Thai Sweet Chili Sauce)</p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/nam-pla-phrik.png') }}" class="sauce-img">
											<p>Phrik Nam Pla</p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/nam-jim-jaew.png') }}" class="sauce-img">
											<p>Nam Jim Jaew</p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/nam-jim-seafood.png') }}" class="sauce-img">
											<p>Nam Jim Seafood</p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/chili-flakes.png') }}" class="sauce-img">
											<p>Chili Flakes</p>
											<p class="caption">(Prik Pon)</p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/karen-chili-oil-sauce.png') }}" class="sauce-img">
											<p>Karen Chili Oil Sauce</p>
											<p class="caption">(Prik Karen)</p>
										</li>
										<li>
											<img src="{{ asset('/public/front/images/concept/banana-chili-sauce.png') }}" class="sauce-img">
											<p>Banana Chili Sauce</p>
											<p class="caption">(Prik Nam Som)</p>
										</li>
									</ul>
									@endif
								</div>

							</div>

						</div>

					</section>

				</div>
			</div>

		@endif

		@endforeach











	</div>

	<!-- end content here -->



	<!-- modal popup -->





	<div id="Modal" class="modal fade mango-modal">

	    <div class="modal-dialog">

	        <div class="modal-content">

	            <div class="modal-header">

		        	<div class="container">

			        	<div class="row">

				        	<div class="col-md-12">

					        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="{{ asset('/public/images/common/close-popup-'.Session::get('Lang').'.svg') }}"></button>

				        	</div>

			        	</div>

		        	</div>



	            </div>

	            <div class="modal-body">

	                <!-- content modal here -->

	                <div class="container">

		                <div class="row">

			                <div class="col-md-7">

				                <div class="row">

					                <div class="col-md-10">

						                <div class="pop-slider mango-slider" >

							                <ul id="concept-slide">



							                </ul>

						                </div>

						                <div class="bx-thumb mango-slider-thumb" >

							                <ul id="concept-thumb">



							                </ul>

						                </div>

					                </div>

				                </div>

			                </div>

			                <div class="col-md-5">

				                <article class="article-concept-content">

									<div class="type-ico">
										<img src="{{ asset('/public/images/common/icon-noodle.svg') }}">
									</div>

									<div class="content-overflow">

										<h2 id="topic_main">ก๋วยเตี๋ยวเนื้อ</h2>

										<h3 id="topic"></h3>

										<img src="{{ asset('/public/images/common/article-hr.svg') }}" alt="article-hr" class="article-hr">

										<div id="detail">



										</div>

									</div>

								</article>



			                </div>

		                </div>

	                </div>

	                <!-- end content modal here -->

	            </div>

	        </div>

	    </div>

	</div>



	<!-- end modal popup -->

	@include('front.inc_footer')



	<link href="{{ asset('/public/front/css/jquery.jscrollpane.css') }}" rel="stylesheet">

	<link href="{{ asset('/public/front/css/jquery.bxslider.css') }}" rel="stylesheet">

	<script type="text/javascript" src="{{ asset('/public/front/js/skrollr.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.jscrollpane.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.mousewheel.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/mwheelIntent.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.bxslider.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/jquery.fitvids.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/public/front/js/main.js') }}"></script>

	<script type="text/javascript">

		$(document).ready(function(){

			$(".readmore a").click(function(e){

				if($(window).width() > 768){

					e.preventDefault();

					$("#Modal").modal('show');

				}



			})



			var slider;

			var sliderthumb;

			var apis = [];


			$("#Modal").on('show.bs.modal', function (e){

				setTimeout(function(){

					//slider

					slider = $('.pop-slider ul').bxSlider({

					            mode: 'fade', //mode: 'fade','horizontal'

					            speed: 500,

					            auto: false,

					            infiniteLoop: true,

					            hideControlOnEnd: true,

					            useCSS: false,

					            controls:false,

					            pager:false,

					            pagerCustom: 'sliderthumb',

					        });



					sliderthumb = $('.bx-thumb ul').bxSlider({

			            mode: 'horizontal', //mode: 'fade','horizontal'

			            speed: 300,

			            auto: false,

			            infiniteLoop: true,

			            hideControlOnEnd: true,

			            useCSS: false,

			            minSlides: 4,

						maxSlides: 5,

						slideWidth: 175,

						slideMargin: 7,

						moveSlides: 1,

						pager:false,

			            onSlideAfter: function() {

				            //slider.startAuto();

				        }

			        });



			        $(".bx-thumb ul li a").click(function(e){

						e.preventDefault();

						$(".bx-thumb ul li a.active").removeClass("active");

						$(this).addClass("active");

						var _index = $(this).parent().attr("data-slide-index");

						console.log("_index = ", _index);

						slider.goToSlide(_index);

					})



					// scroll area
					//$('.content-overflow').jScrollPane();
					$('.content-overflow').each(
						function()
						{
							apis.push($(this).jScrollPane().data().jsp);
						}
					)

				}, 800)

				setTimeout(function(){
					if($('.content-overflow').hasClass("jspScrollable") == true){
						$(".content-overflow").closest(".article-concept-content").addClass("has-scroll");
					}


					$('.modal-body .article-concept-content').css({
						opacity : 1
					})
					$('.pop-slider').css({

				        opacity : 1

			        });

			        $('.bx-thumb').css({

				        opacity : 1

			        });

				}, 800)



			});


			$("#Modal .close").click(function(){

				if (apis.length) {
					$.each(
						apis,
						function(i) {
							this.destroy();
						}
					)
					apis = [];
				}

				$(".article-concept-content").removeClass("has-scroll");


				$('.modal-body .article-concept-content').css({
						opacity : 0
					})
				$('.pop-slider').css({

			        opacity : 0

		        });

		        $('.bx-thumb').css({

			        opacity : 0

		        });
		        setTimeout(function(){
			        slider.destroySlider();
					sliderthumb.destroySlider();
					$(".bx-thumb ul li").each(function(){
						$(this).find('a').removeClass('active');
					})
					$(".bx-thumb ul li").eq(0).find('a').addClass('active');
					//$('.content-overflow').jScrollPane();
		        }, 300)

			})



			equalheight = function(container){



			var currentTallest = 0,

			     currentRowStart = 0,

			     rowDivs = new Array(),

			     $el,

			     topPosition = 0;

			 $(container).each(function() {



			   $el = $(this);

			   $($el).height('auto')

			   topPostion = $el.position().top;



			   if (currentRowStart != topPostion) {

			     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {

			       rowDivs[currentDiv].height(currentTallest);

			     }

			     rowDivs.length = 0; // empty the array

			     currentRowStart = topPostion;

			     currentTallest = $el.height();

			     rowDivs.push($el);

			   } else {

			     rowDivs.push($el);

			     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);

			  }

			   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {

			     rowDivs[currentDiv].height(currentTallest);

			   }

			 });

			}



			$(window).load(function() {

			  equalheight('.sauce li');

			});





			$(window).resize(function(){

			  equalheight('.sauce li');

			});





			$('.show-detail').click(function(){

				$.get("{{ url('galleryconcept') }}", { id: $(this).attr('id')} ,function(data){

					$('#concept-slide').html('');

					$('#concept-thumb').html('');

					$.each( data, function( key, v ) {

					  $('#concept-slide').append('<li data-slide-index="'+ key +'"><img src="{{ asset('/images/') }}/'+ v.img_name +'"/></li>');

					  $('#concept-thumb').append('<li data-slide-index="'+ key +'"><a href="#"><img src="{{ asset('/images/') }}/'+ v.img_name +'"/></a></li>');

					});

				}, "json" );


				function nl2br (str, is_xhtml) {
				    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
				    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
				}
				$.get("{{ url('conceptdetail') }}", { id: $(this).attr('id')} ,function(data){

					$('#topic_main').html('');

					$('#topic').html('');

					$('#detail').html('');

					$('#topic_main').html(data.topic_main);

					$('#topic').html(data.topic_{{ Session::get('Lang') }});

					$('#detail').html('<p>' + nl2br(data.detail_{{ Session::get('Lang') }}).replace(/<br\s*[\/]?>/gi,"</p><p>") + '</p>');

					$('.type-ico').html('<img src="{{ asset('/images/type/') }}/'+ data.img_name +'">');
				}, "json" );

			});




		})



	</script>

	</div>

</body>

</html>





