@extends('app')



@section('htmlheader_title')

    Home

@endsection





@section('main-content')

<div>

	<div class="row">

		<div class="col-md-12">

			<div class="panel panel-default">

			  <div class="panel-heading">Social</div>

			   <form class="form-horizontal" method="post" enctype="multipart/form-data">

				<div class="panel-body">
					<div class="form-group">
	                  <label for="ig" class="col-sm-2 control-label">
	                  	<img src="{{ asset('public/images/common/icon-ig.svg') }}" class="ico" style="width: 15px;">
	                  </label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($ig) ? $ig->url:'') }}" class="form-control" id="ig" name="ig">

	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="facebook" class="col-sm-2 control-label">
	                  	<img src="{{ asset('public/images/common/icon-fb.svg') }}" class="ico" style="width: 10px;">
	                  </label>
	                  <div class="col-sm-10">
	                    <input type="text" value="{{ (isset($facebook) ? $facebook->url:'') }}" class="form-control" id="facebook" name="facebook">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="wc" class="col-sm-2 control-label">
	                  	<img src="{{ asset('public/images/common/icon-wc.svg') }}" class="ico" style="width: 20px;">
	                  </label>
	                  <div class="col-sm-10">
	                    <input type="text" value="{{ (isset($facebook) ? $wc->url:'') }}" class="form-control" id="wc" name="wc">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="wb" class="col-sm-2 control-label">
	                  	<img src="{{ asset('public/images/common/icon-wb.svg') }}" class="ico" style="width: 20px;">
	                  </label>
	                  <div class="col-sm-10">
	                    <input type="text" value="{{ (isset($facebook) ? $wb->url:'') }}" class="form-control" id="wb" name="wb">
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

@endsection