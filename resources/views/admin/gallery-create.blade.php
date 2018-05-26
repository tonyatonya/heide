@extends('app')



@section('htmlheader_title')

    Home

@endsection





@section('main-content')

<div>

	<div class="row">

		<div class="col-md-12">

			<div class="panel panel-default">

			  <div class="panel-heading">Gallery / Create or Update</div>

			   <form class="form-horizontal" id="form-concept" method="post" enctype="multipart/form-data">

				<div class="panel-body">

					<div class="form-group">

	                  <label for="name_en" class="col-sm-2 control-label">Type</label>

	                  <div class="col-sm-10">

	                    <select name="type" class="form-control">

	                    	<option value="Photo" {{ (isset($data) && $data->type=='Photo'? 'selected':'') }}>Photo</option>

	                    	<option value="Video" {{ (isset($data) && $data->type=='Video'? 'selected':'') }}>Video</option>

	                    </select>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="photo" class="col-sm-2 control-label">Gallary (Photo)</label>

	                  <div class="col-sm-10">

						   <div id="gallery" class="multiupload" upload-url="{{ url('admin/Gallery/upload' ) }}">     

								<ul id="preview" class="preview">

									@if(isset($gallery))

										@foreach($gallery as $g)

											<li id="gall_{{$g->id}}" class="img-gallery ui-sortable-handle">

											  <a href="{{ url('admin/Gallery/imagdel/'. $g->id  ) }}" class="color-red del-preview glyphicon glyphicon-off"></a>

											   <b></b><img src="{{ asset( 'images/Gallery/'. $g->img_name ) }}" id="img-product-{{ $g->id }}" class="img-preview">

											   <input type="hidden" name="gimage[]" value="{{ $g->id }}" />

											</li>

										 @endforeach

									@endif

								</ul>

								<button type="button" class="btn btn-default" id="btn-select"><i class="fa fa-image"></i> เลือกภาพ</button>

								<small class="color-red">* ภาพจะถูกปรับขนาดเป็น 545 x 363 px โดยอัตโนมัติ และจะนำภาพแรกเป็นภาพปกเสมอ</small>

							</div>

					  </div>

	                </div>

	                <div class="form-group">

	                  <label for="photo" class="col-sm-2 control-label"></label>

	                  <div class="col-sm-10">

	                    <img id="imgAvatar" src="{{ (isset($data) ? asset('images/'.$data->photo):'') }}" class="img-responsive" style="max-width: 300px;">

	                  </div>

	                </div>

				  	<div class="form-group">

	                  <label for="photo" class="col-sm-2 control-label">Cover Photo(Video)</label>

	                  <div class="col-sm-10">

	                    <input type="file" id="photo" name="photo">

	                  	<p class="help-block">Select File</p>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="link_en" class="col-sm-2 control-label">Video Link EN</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($data) ? $data->link_en:'') }}" class="form-control" id="link_en" name="link_en">

	                  </div>

	                </div>
	                <div class="form-group">

	                  <label for="link_ch" class="col-sm-2 control-label">Video Link CH</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($data) ? $data->link_ch:'') }}" class="form-control" id="link_ch" name="link_ch">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="name_en" class="col-sm-2 control-label">Name EN</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($data) ? $data->name_en:'') }}" class="form-control" id="name_en" name="name_en">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="name_ch" class="col-sm-2 control-label">Name CH</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($data) ? $data->name_ch:'') }}" class="form-control" id="name_ch" name="name_ch">

	                  </div>

	                </div>

				</div>

				<div class="panel-footer text-right">

					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Back</button>

                	<button type="submit" class="btn btn-primary" id="btn-save">Save</button>

				</div>

			  </form>

			</div>

		</div>

	</div>

</div>



@endsection



@section('footer')

   <script type="text/javascript">

   		

   		$( document ).ready(function(){

   			var gallery   =  uploadpl;

			 gallery.btn_browse   =  'btn-select';

			 gallery.filelist   =  '.preview';

			 gallery.container_id  =  'gallery';

			 gallery.limit    =  12;

			 gallery.multipart   = true; 

			 gallery.redirect   = 'back';

			 gallery.return_id   = $('input[name="id"]');

			 gallery.image_type   =  'product';

			 gallery.form_btn  = '#btn-save';

			 gallery.run( $('#form-concept') );

			  

			 $('#gallery').on('click','.preview',function(e){

			  	$('#btn-select').trigger('click');

			 });

   		});

   </script>

@endsection