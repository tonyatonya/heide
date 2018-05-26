@extends('app')



@section('htmlheader_title')

    Home

@endsection





@section('main-content')

<div>

	<div class="row">

		<div class="col-md-12">

			<div class="panel panel-default">

			  <div class="panel-heading">Cpncept / Create or Update</div>

			   <form class="form-horizontal" method="post" enctype="multipart/form-data" id="form-concept">

				<div class="panel-body">

				  	<div class="form-group">

	                  <label for="photo" class="col-sm-2 control-label"></label>

	                  <div class="col-sm-10">

	                    <img id="imgAvatar" src="{{ (isset($data) ? asset('images/thumbs/'.$data->photo):'') }}" class="img-responsive" style="max-width: 300px;">

	                  </div>

	                </div>

				  	<div class="form-group">

	                  <label for="photo" class="col-sm-2 control-label">Cover Photo</label>

	                  <div class="col-sm-10">

	                    <input type="file" id="photo" name="photo">

	                  	<p class="help-block">Size 797 x 745</p>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="photo" class="col-sm-2 control-label">Gallary</label>

	                  <div class="col-sm-10">

	                    <div id="queue"></div>

										<div id="gallery" class="multiupload" upload-url="{{ url('admin/Concept/upload' ) }}">     

									        <ul id="preview" class="preview">

									          @if(isset($gallery))

										          @foreach($gallery as $g)

											           <li id="gall_{{$g->id}}" class="img-gallery ui-sortable-handle">

											            <a href="{{ url('admin/Concept/imagdel/'. $g->id  ) }}" class="color-red del-preview glyphicon glyphicon-off"></a>

											            <b></b><img src="{{ asset( 'images/'. $g->img_name ) }}" id="img-product-{{ $g->id }}" class="img-preview">

											            <input type="hidden" name="gimage[]" value="{{ $g->id }}" />

											           </li>

										          @endforeach

										      @endif

									        </ul>

									        <button type="button" class="btn btn-default" id="btn-select"><i class="fa fa-image"></i> เลือกภาพ</button>

									       	<small class="color-red">* ภาพควรมีขนาด 545 x 363 px</small>

									       </div>

					                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="topic_main" class="col-sm-2 control-label">Topic Main</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($data) ? $data->topic_main:'') }}" class="form-control" id="topic_main" name="topic_main">

	                  </div>

	                </div>
	                <div class="form-group">
	                  <label for="location_en" class="col-sm-2 control-label">Type</label>
	                  <div class="col-sm-10">
	                  	@foreach($foodtype as $k=>$v)
		                    <div class="radio">
		                    <label>
		                      <input type="radio" name="type" value="{{ $v->id }}" {{ (isset($data) && $data->type==$v->id ? 'checked':'') }}>
		                      <img src="{{ asset('images/type/'.$v->img_name) }}" style="width: 33px;height: 33px;">
		                    </label>
		                  	</div>
	                  	@endforeach
	                  </div>
	                </div>
	                <div class="form-group">

	                  <label for="topic_en" class="col-sm-2 control-label">Topic EN</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($data) ? $data->topic_en:'') }}" class="form-control" id="topic_en" name="topic_en">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="introduction_en" class="col-sm-2 control-label">Introduction EN</label>

	                  <div class="col-sm-10">

	                    <textarea id="introduction_en" name="introduction_en" class="form-control">{{ (isset($data) ? $data->introduction_en:'') }}</textarea>

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="detail_en" class="col-sm-2 control-label">Detail EN</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="detail_en" name="detail_en" class="form-control">{{ (isset($data) ? $data->detail_en:'') }}</textarea>

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="topic_ch" class="col-sm-2 control-label">Topic CH</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($data) ? $data->topic_ch:'') }}" class="form-control" id="topic_ch" name="topic_ch">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="introduction_ch" class="col-sm-2 control-label">Introduction CH</label>

	                  <div class="col-sm-10">

	                    <textarea id="introduction_ch" name="introduction_ch" class="form-control">{{ (isset($data) ? $data->introduction_ch:'') }}</textarea>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="detail_ch" class="col-sm-2 control-label">Detail CH</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="detail_ch" name="detail_ch" class="form-control">{{ (isset($data) ? $data->detail_ch:'') }}</textarea>

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

   			$('#photo').change(function(){

   				$('#imgAvatar').attr('src', this.value); // for IE

	   			if (this.files && this.files[0]) {

	                var reader = new FileReader();

	                reader.onload = function (e) {

	                    $('#imgAvatar').attr('src', e.target.result);

	                }

	                reader.readAsDataURL(this.files[0]);

            	}

   			});





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