@extends('app')



@section('htmlheader_title')

    Home

@endsection





@section('main-content')

<div>

	<div class="row">

		<div class="col-md-12">

			<div class="panel panel-default">

			  <div class="panel-heading">Location / Create or Update</div>

			   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="form-concept">

				<div class="panel-body">

				  	

	                <div class="form-group">

	                  <label for="photo" class="col-sm-2 control-label">Gallary</label>

	                  <div class="col-sm-10">

						   <div id="gallery" class="multiupload" upload-url="{{ url('admin/Contactus/upload' ) }}">     

								<ul id="preview" class="preview">

									@if(isset($gallery))

										@foreach($gallery as $g)

											<li id="gall_{{$g->id}}" class="img-gallery ui-sortable-handle">

											  <a href="{{ url('admin/Contactus/imglocationdel/'. $g->id  ) }}" class="color-red del-preview glyphicon glyphicon-off"></a>

											   <b></b><img src="{{ asset( 'images/location/'. $g->img_name ) }}" id="img-product-{{ $g->id }}" class="img-preview">

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

	                  <label for="location_en" class="col-sm-2 control-label">Type</label>

	                  <div class="col-sm-10">

	                    <div class="radio">

	                    <label>

	                      <input type="radio" name="type" id="type1" value="1" checked="">

	                      <img src="{{ asset( 'images/type/location-type1.png' ) }}" class="img-preview">

	                    </label>

	                  </div>

	                  <div class="radio">

	                    <label>

	                      <input type="radio" name="type" id="type2" value="2">

	                      <img src="{{ asset( 'images/type/location-type2.png' ) }}" class="img-preview">

	                    </label>

	                  </div>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="location_en" class="col-sm-2 control-label">Location EN</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($data) ? $data->location_en:'') }}" class="form-control" id="location_en" name="location_en">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="address_en" class="col-sm-2 control-label">Address EN</label>

	                  <div class="col-sm-10">

	                    <textarea id="address_en" name="address_en" class="form-control">{{ (isset($data) ? $data->address_en:'') }}</textarea>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="location_en" class="col-sm-2 control-label">Location CH</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($data) ? $data->location_ch:'') }}" class="form-control" id="location_ch" name="location_ch">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="address_ch" class="col-sm-2 control-label">Address CH</label>

	                  <div class="col-sm-10">

	                    <textarea id="address_ch" name="address_ch" class="form-control">{{ (isset($data) ? $data->address_ch:'') }}</textarea>

	                  </div>

	                </div>

	                <br/>

	                <div class="form-group">

	                  <label for="time" class="col-sm-2 control-label">Time</label>

	                  <div class="col-sm-10">

	                  	<input type="text" value="{{ (isset($data) ? $data->time:'') }}" class="form-control" id="time" name="time">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="tel" class="col-sm-2 control-label">Tel</label>

	                  <div class="col-sm-10">

	                  	<input type="text" value="{{ (isset($data) ? $data->tel:'') }}" class="form-control" id="tel" name="tel">

	                  </div>

	                </div>

					<br/>

					<div class="form-group">

	                  <label for="instagram" class="col-sm-2 control-label"><i class='fa fa-link'></i> instagram</label>

	                  <div class="col-sm-10">

	                  	<input type="text" value="{{ (isset($data) ? $data->instagram:'') }}" class="form-control" id="instagram" name="instagram">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="facebook" class="col-sm-2 control-label"><i class='fa fa-link'></i> facebook</label>

	                  <div class="col-sm-10">

	                  	<input type="text" value="{{ (isset($data) ? $data->facebook:'') }}" class="form-control" id="facebook" name="facebook">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="Youtube" class="col-sm-2 control-label"><i class='fa fa-link'></i> Youtube</label>

	                  <div class="col-sm-10">

	                  	<input type="text" value="{{ (isset($data) ? $data->youtube:'') }}" class="form-control" id="youtube" name="youtube">

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