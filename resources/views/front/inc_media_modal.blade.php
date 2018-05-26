<div id="modal-gallery" class="modal fade mango-modal media-popup">

    <div class="modal-dialog">

        <div class="modal-content">

	        @include('front.inc_medianav')

            <div class="modal-header">

	        	<div class="container">

		        	<div class="row">

			        	<div class="col-md-12">

				        	<h2 class="popup-h2" id="gallery-head">MANGO CHILI</h2>

				        	<button id="close-gal" type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="{{ asset('/public/images/common/close-popup-'.Session::get('Lang').'.svg') }}"></button>

			        	</div>

		        	</div>

	        	</div>



            </div>

            <div class="modal-body">

                <!-- content modal here -->

                <div class="container">

	                <div class="row">

		                <div class="col-md-8 col-md-offset-2">

			                <div class="pop-slider mango-slider" >

				                <ul id="pop_up">



				                </ul>

			                </div>

			                <div class="bx-thumb mango-slider-thumb">

				                <ul id="bx-thumb-slide">



				                </ul>



			                </div>



		                </div>

	                </div>

                </div>

                <!-- end content modal here -->

            </div>

        </div>

    </div>

</div>

<div id="modal-video" class="modal fade mango-modal media-popup">

    <div class="modal-dialog">

        <div class="modal-content">

	        @include('front.inc_medianav')

            <div class="modal-header">

	        	<div class="container">

		        	<div class="row">

			        	<div class="col-md-12">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<h2 class="popup-h2" id="video_name">MANGO CHILI Video</h2>
									<!-- ถ้าเป็นการกดดูข่าวที่มี Video ให้แสดง Header ใน Comment นี้ -->
									<!--
						        	<h2 class="popup-h2-news">
							        	ASIAN RESTAURANT GROUP RAISES AWARENESS FOR CHILDREN
		 WITH MOVEMENT DIFFICULTIES IN INSPIRATIONAL
		 “CLIMB TO CHANGE A LIFE” EVENT IN THAILAND
						        	</h2>
						        	-->
								</div>
							</div>


				        	<button type="button" id="close-video" class="close" data-dismiss="modal" aria-hidden="true"><img src="{{ asset('/public/images/common/close-popup-'.Session::get('Lang').'.svg') }}"></button>

			        	</div>

		        	</div>

	        	</div>



            </div>

            <div class="modal-body">

                <!-- content modal here -->

                <div class="container">

	                <div class="row">

		                <div class="col-md-8 col-md-offset-2">

			                <div class="video-frame">

			                	<iframe src="" id="iframe1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>

			                </div>

		                </div>
		                <!-- if Click From Home -->
		                <div class="col-xs-12">
			                <div class="readmore more-btn" style="text-align: center; margin-top: 15px;">
								<a href="#" style="float: none;">{{ Lang::get('button.readmore') }}</a>

								<!--
									เงื่อนไขของปุ่มที่ตำแหน่งนี้
									- แสดงเฉพาะการกดเนื้อหาข่าวที่มี Video เท่านั้น
								-->
							</div>
		                </div>
		                <!-- end -->

	                </div>

                </div>

                <!-- end content modal here -->

            </div>

        </div>

    </div>

</div>

<div id="modal-bio" class="modal fade mango-modal media-popup">

    <div class="modal-dialog">

        <div class="modal-content">

	        @include('front.inc_medianav')

            <div class="modal-header">

	        	<div class="container">

		        	<div class="row">

			        	<div class="col-md-12">

				        	<button id="close-bio" type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="{{ asset('/public/images/common/close-popup-'.Session::get('Lang').'.svg') }}"></button>

			        	</div>

		        	</div>

	        	</div>



            </div>

            <div class="modal-body">

                <!-- content modal here -->

                <div class="container">

	                <div class="row">

		                <div class="col-md-4 col-md-offset-1">

			                <figure class="border-frame" id="border-frame">



							</figure>

							<div class="bio-profile">

								<div class="bio-name"></div>

								<div class="bio-position"></div>

								<div class="bio-des"></div>



							</div>

		                </div>

		                <div class="col-md-6 col-md-offset-1">

			                <article class="article-concept-content">

								<div class="content-overflow">



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