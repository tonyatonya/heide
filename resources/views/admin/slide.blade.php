@extends('app')



@section('htmlheader_title')

    Home

@endsection





@section('main-content')

<div>

	<div class="row">

		<div class="col-md-12">

			<div class="box box-success">

				<div class="box-header with-border">

					<div class="box-title">Main Slide</div>

					<div class="box-tools pull-right">

	                	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

	                </div>

                </div>

				<div class="box-body">

					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default" style="margin-bottom: 10px;">

		              Upload Image

		            </button>

					<table class="table table-bordered table-hover">

						<tr>

							<th>#</th>

							<th>Images</th>

							<th></th>

						</tr>

						@foreach($data as $key => $val)

							<tr>

								<td>{{ $key+1 }} </td>

								<td>
									@if($val->type=='image')
										<img src="{{ asset('images/thumbs/'.$val->name) }}" class="img-responsive">
									@elseif($val->type=='video')
										<video height="150">
										  <source src="{{ asset('images/'.$val->name) }}" type="video/mp4">
										Your browser does not support the video tag.
										</video>
									@endif
								</td>

								<td  class="text-center" style="vertical-align: middle;">

		                            @if($min_sort != $val->sort)

		                              <a href="{{ asset('admin/Slide/up/'.$val->id) }}"><i class="fa fa-fw  fa-arrow-up"></i></a>

		                            @endif

		                            @if($max_sort != $val->sort)

		                              <a href="{{ asset('admin/Slide/down/'.$val->id) }}"><i class="fa fa-fw  fa-arrow-down"></i></a>

		                            @endif

		                          </td>

								<td class="text-center" style="vertical-align: middle;">

									<a href="{{ asset('admin/Slide/delete/'.$val->id) }}"><i class="fa fa-fw fa-trash-o"></i></a>

								</td>

							</tr>

						@endforeach

					</table>

				</div>

			</div>

		</div>



		<div class="col-md-12">

			<div class="box box-success">

				<div class="box-header with-border">

					<div class="box-title">About</div>

					<div class="box-tools pull-right">

	                	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

	                </div>

                </div>

				<div class="box-body">

				 <div class="col-md-6">

				   <form class="form-horizontal" action="{{ url('admin/Slide/aboutdetail') }}" method="post" enctype="multipart/form-data">

					<div class="form-group">

	                  <label for="topic_en" class="col-sm-2 control-label">Topic EN</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($about) ? $about->topic_en:'') }}" class="form-control" id="topic_en" name="topic_en">

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="detail_en" class="col-sm-2 control-label">Detail EN</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="detail_en" name="detail_en" class="form-control">{{ (isset($about) ? $about->detail_en:'') }}</textarea>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="topic_en" class="col-sm-2 control-label">Topic CH</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($about) ? $about->topic_ch:'') }}" class="form-control" id="topic_ch" name="topic_ch">

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="detail_en" class="col-sm-2 control-label">Detail CH</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="detail_ch" name="detail_ch" class="form-control">{{ (isset($about) ? $about->detail_ch:'') }}</textarea>

	                  </div>

	                </div>

	                <div class="text-right">

	               	 <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                     <button type="submit" class="btn btn-primary">Save</button>

	                </div>

	               </form>

	              </div>

	              <div class="col-md-6">

	              	<table class="table table-bordered table-hover">

	              		<tr>

	              			<td><img src="{{ asset('images/'.$about->img_1) }}" class="img-responsive" style="max-height: 100px;"></td>

	              			<td>255 x 170</td>

	              			<td>

	              				<button type="button" rel="1" class="btn btn-success image-about" data-toggle="modal" data-target="#image-about">

					              Upload Image

					            </button>

	              			</td>

	              		</tr>

	              		<tr>

	              			<td><img src="{{ asset('images/'.$about->img_2) }}" class="img-responsive" style="max-height: 150px;"></td>

	              			<td>196 x 294</td>

	              			<td>

	              				<button type="button" rel="2" class="btn btn-success image-about" data-toggle="modal" data-target="#image-about">

					              Upload Image

					            </button>

	              			</td>

	              		</tr>

	              		<tr>

	              			<td><img src="{{ asset('images/'.$about->img_3) }}" class="img-responsive" style="max-height: 100px;"></td>

	              			<td>389 x 251</td>

	              			<td>

	              				<button type="button" rel="3" class="btn btn-success image-about" data-toggle="modal" data-target="#image-about">

					              Upload Image

					            </button>

	              			</td>

	              		</tr>

	              	</table>

	              </div>

				</div>

			</div>

		</div>



		<div class="col-md-12">

			<div class="box box-success">

				<div class="box-header with-border">

					<div class="box-title">HomePage Banner</div>

					<div class="box-tools pull-right">

	                	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

	                </div>

                </div>

				<div class="box-body">

					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-banner" style="margin-bottom: 10px;">

		              Upload Image

		            </button>

					<img src="{{ asset('images/'.$banner->img_name) }}" class="img-responsive">

				</div>

			</div>

		</div>



		<div class="col-md-12">

			<div class="box box-success">

				<div class="box-header with-border">

					<div class="box-title">Suggest Food 1</div>

					<div class="box-tools pull-right">

	                	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

	                </div>

                </div>

				<div class="box-body">

				 <div class="col-md-6">

	              	<table class="table table-bordered table-hover">

	              		<tr>

	              			<td><img src="{{ asset('images/'.$img_suggest1->img_name) }}" class="img-responsive" style="max-height: 100px;"></td>

	              			<td>416 x 416</td>

	              			<td>

	              				<button type="button" rel="2" class="btn btn-success image-suggest" data-toggle="modal" data-target="#image-suggest">

					              Upload Image

					            </button>

	              			</td>

	              		</tr>

	              	</table>

	              </div>

				 <div class="col-md-6">

				   <form class="form-horizontal" action="{{ url('admin/Slide/suggest1') }}" method="post" enctype="multipart/form-data">

					<div class="form-group">

	                  <label for="topic_en" class="col-sm-2 control-label">Topic EN</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($SuggestFood1) ? $SuggestFood1->topic_en:'') }}" class="form-control" id="topic_en" name="topic_en">

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="detail_en" class="col-sm-2 control-label">Detail EN</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="detail_en" name="detail_en" class="form-control">{{ (isset($SuggestFood1) ? $SuggestFood1->detail_en:'') }}</textarea>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="topic_en" class="col-sm-2 control-label">Topic CH</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($SuggestFood1) ? $SuggestFood1->topic_ch:'') }}" class="form-control" id="topic_ch" name="topic_ch">

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="detail_en" class="col-sm-2 control-label">Detail CH</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="detail_ch" name="detail_ch" class="form-control">{{ (isset($SuggestFood1) ? $SuggestFood1->detail_ch:'') }}</textarea>

	                  </div>

	                </div>

	                <div class="text-right">

	               	 <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                     <button type="submit" class="btn btn-primary">Save</button>

	                </div>

	               </form>

	              </div>

				</div>

			</div>

		</div>



		<div class="col-md-12">

			<div class="box box-success">

				<div class="box-header with-border">

					<div class="box-title">Suggest Food 2</div>

					<div class="box-tools pull-right">

	                	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

	                </div>

                </div>

				<div class="box-body">

				 <div class="col-md-6">

	              	<table class="table table-bordered table-hover">

	              		<tr>

	              			<td><img src="{{ asset('images/'.$img_suggest2->img_name) }}" class="img-responsive" style="max-height: 100px;"></td>

	              			<td>416 x 416</td>

	              			<td>

	              				<button type="button" rel="3" class="btn btn-success image-suggest" data-toggle="modal" data-target="#image-suggest">

					              Upload Image

					            </button>

	              			</td>

	              		</tr>

	              	</table>

	              </div>

				 <div class="col-md-6">

				   <form class="form-horizontal" action="{{ url('admin/Slide/suggest2') }}" method="post" enctype="multipart/form-data">

					<div class="form-group">

	                  <label for="topic_en" class="col-sm-2 control-label">Topic EN</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($SuggestFood2) ? $SuggestFood2->topic_en:'') }}" class="form-control" id="topic_en" name="topic_en">

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="detail_en" class="col-sm-2 control-label">Detail EN</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="detail_en" name="detail_en" class="form-control">{{ (isset($SuggestFood2) ? $SuggestFood2->detail_en:'') }}</textarea>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="topic_en" class="col-sm-2 control-label">Topic CH</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($SuggestFood2) ? $SuggestFood2->topic_ch:'') }}" class="form-control" id="topic_ch" name="topic_ch">

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="detail_en" class="col-sm-2 control-label">Detail CH</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="detail_ch" name="detail_ch" class="form-control">{{ (isset($SuggestFood2) ? $SuggestFood2->detail_ch:'') }}</textarea>

	                  </div>

	                </div>

	                <div class="text-right">

	               	 <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                     <button type="submit" class="btn btn-primary">Save</button>

	                </div>

	               </form>

	              </div>

				</div>

			</div>

		</div>



	</div>

	<div class="modal fade" id="modal-default">

	   <div class="modal-dialog">

	     <div class="modal-content">

	        <form method="post" enctype="multipart/form-data">

		      <div class="modal-header">

		         <button type="button" class="close" data-dismiss="modal" aria-label="Close">

		         <span aria-hidden="true">×</span></button>

		           <h4 class="modal-title">Upload Slide</h4>

		       </div>

	           <div class="modal-body">

	             <div class="form-group">

                  <label for="photo">Image</label>

                  <input type="file" id="photo" name="photo">

                  <p class="help-block">Size 1281 x 644</p>

                 </div>

	           </div>

	           <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary">Save</button>

               </div>

	       	</form>

	     </div>

	        <!-- /.modal-content -->

	    </div>

	  <!-- /.modal-dialog -->

	</div>

	<div class="modal fade" id="image-about">

	   <div class="modal-dialog">

	     <div class="modal-content">

	        <form method="post" action="{{ url('admin/Slide/aboutimg') }}" enctype="multipart/form-data">

		      <div class="modal-header">

		         <button type="button" class="close" data-dismiss="modal" aria-label="Close">

		         <span aria-hidden="true">×</span></button>

		           <h4 class="modal-title">Image About</h4>

		       </div>

	           <div class="modal-body">

	             <div class="form-group">

                  <label for="photo">Image</label>

                  <input type="file" id="photo" name="photo">

                  <p class="help-block"></p>

                  <input type="hidden" id="imgabout" name="imgabout">

                  <input type="hidden" id="imgsize" name="imgsize">

                 </div>

	           </div>

	           <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary">Save</button>

               </div>

	       	</form>

	     </div>

	        <!-- /.modal-content -->

	    </div>

	  <!-- /.modal-dialog -->

	</div>

	<div class="modal fade" id="modal-banner">

	   <div class="modal-dialog">

	     <div class="modal-content">

	        <form method="post" action="{{ url('admin/Slide/banner') }}" enctype="multipart/form-data">

		      <div class="modal-header">

		         <button type="button" class="close" data-dismiss="modal" aria-label="Close">

		         <span aria-hidden="true">×</span></button>

		           <h4 class="modal-title">Image Banner</h4>

		       </div>

	           <div class="modal-body">

	             <div class="form-group">

                  <label for="photo">Image</label>

                  <input type="file" id="photo" name="photo">

                  <p class="help-block">1280 x 414</p>

                 </div>

	           </div>

	           <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary">Save</button>

               </div>

	       	</form>

	     </div>

	        <!-- /.modal-content -->

	    </div>

	  <!-- /.modal-dialog -->

	</div>

	<div class="modal fade" id="image-suggest">

	   <div class="modal-dialog">

	     <div class="modal-content">

	        <form method="post" action="{{ url('admin/Slide/suggestimg') }}" enctype="multipart/form-data">

		      <div class="modal-header">

		         <button type="button" class="close" data-dismiss="modal" aria-label="Close">

		         <span aria-hidden="true">×</span></button>

		           <h4 class="modal-title">Image About</h4>

		       </div>

	           <div class="modal-body">

	             <div class="form-group">

                  <label for="photo">Image</label>

                  <input type="file" id="photo" name="photo">

                  <p class="help-block"></p>

                  <input type="hidden" id="imgsuggest" name="imgsuggest">

                  <input type="hidden" id="imgsuggestsize" name="imgsuggestsize">

                 </div>

	           </div>

	           <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary">Save</button>

               </div>

	       	</form>

	     </div>

	        <!-- /.modal-content -->

	    </div>

	  <!-- /.modal-dialog -->

	</div>

</div>



@endsection

@section('footer')

   <script type="text/javascript">

   		$( document ).ready(function(){

   			$('.image-about').click(function(){

   				$('#image-about').find('.modal-title').html('Image About Section ' + $(this).attr('rel'));

   				$('#image-about').find('.help-block').html($(this).parent().prev().html());

   				$('#imgabout').val($(this).attr('rel'));

   				$('#imgsize').val($(this).parent().prev().html());

   			});

   			$('.image-suggest').click(function(){

   				$('#image-suggest').find('.modal-title').html('Image Suggest ' + $(this).attr('rel'));

   				$('#image-suggest').find('.help-block').html($(this).parent().prev().html());

   				$('#imgsuggest').val($(this).attr('rel'));

   				$('#imgsuggestsize').val($(this).parent().prev().html());

   			});

   		});

   </script>

@endsection
