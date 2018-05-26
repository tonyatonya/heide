@extends('app')



@section('htmlheader_title')

    Home

@endsection





@section('main-content')

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
									<img src="{{ asset('images/type/'.$val->img_name) }}" class="img-responsive" style="height: 33px;width: 33px;">
								</td>
								<td class="text-center" style="vertical-align: middle;">
									<a href="{{ asset('admin/FoodType/delete/'.$val->id) }}"><i class="fa fa-fw fa-trash-o"></i></a>
								</td>
							</tr>
						@endforeach

					</table>

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

                  <p class="help-block">Size 33 x 33</p>

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
