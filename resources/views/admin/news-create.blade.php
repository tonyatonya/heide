@extends('app')
@section('htmlheader_title')
    Home
@endsection
@section('main-content')
<div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">NEWS RELEASE / Create or Update</div>
			   <form class="form-horizontal" method="post" enctype="multipart/form-data">
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
	                  	<p class="help-block">Size 255 x 159</p>
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="topic_en" class="col-sm-2 control-label">Topic EN</label>
	                  <div class="col-sm-10">
	                    <input type="text" value="{{ (isset($data) ? $data->topic_en:'') }}" class="form-control" id="topic_en" name="topic_en">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="video_en" class="col-sm-2 control-label">URL Video EN</label>
	                  <div class="col-sm-10">
	                    <input type="text" value="{{ (isset($data) ? $data->video_en:'') }}" class="form-control" id="video_en" name="video_en">
	                  </div>
	                </div>
					<div class="form-group">
	                  <label for="detail_en" class="col-sm-2 control-label">Detail EN</label>
	                  <div class="col-sm-10">
	                    <textarea id="detail_en" name="detail_en" class="form-control">{{ (isset($data) ? $data->detail_en:'') }}</textarea>
	                  </div>
	                </div>
					<div class="form-group">
	                  <label for="topic_ch" class="col-sm-2 control-label">Topic CH</label>
	                  <div class="col-sm-10">
	                    <input type="text" value="{{ (isset($data) ? $data->topic_ch:'') }}" class="form-control" id="topic_ch" name="topic_ch">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="video_ch" class="col-sm-2 control-label">URL Video CH</label>
	                  <div class="col-sm-10">
	                    <input type="text" value="{{ (isset($data) ? $data->video_ch:'') }}" class="form-control" id="video_ch" name="video_ch">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="detail_ch" class="col-sm-2 control-label">Detail CH</label>
	                  <div class="col-sm-10">
	                    <textarea id="detail_ch" name="detail_ch" class="form-control">{{ (isset($data) ? $data->detail_ch:'') }}</textarea>
	                  </div>
	                </div>
				</div>
				<div class="panel-footer text-right">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Back</button>
                	<button type="submit" class="btn btn-primary">Save</button>
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
   			var remarker = new tiny2();
   			remarker.section = '#detail_en';
   			//remarker.height = '120';
   			remarker.mini();
   			var remarker = new tiny2();
   			remarker.section = '#detail_ch';
   			//remarker.height = '120';
   			remarker.mini();
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
   		});
   </script>
@endsection