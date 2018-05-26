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
					<div class="box-title">Media Banner</div>
					<div class="box-tools pull-right">
	                	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                </div>
                </div>
				<div class="box-body">
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-banner" style="margin-bottom: 10px;">
		              Upload Image
		            </button>
					<img style="max-height: 500px;" src="{{ asset('images/'.$banner->img_name) }}" class="img-responsive">
				</div>
			</div>
		</div>

	</div>
	
	<div class="modal fade" id="modal-banner">
	   <div class="modal-dialog">
	     <div class="modal-content">
	        <form method="post" action="{{ url('admin/MediaBanner/banner') }}" enctype="multipart/form-data">
		      <div class="modal-header">
		         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		         <span aria-hidden="true">×</span></button>
		           <h4 class="modal-title">Image Banner</h4>
		       </div>
	           <div class="modal-body">
	             <div class="form-group">
                  <label for="photo">Image</label>
                  <input type="file" id="photo" name="photo">
                  <p class="help-block">1331 x 749</p>
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
