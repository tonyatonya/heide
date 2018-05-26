@extends('app')



@section('htmlheader_title')

Home

@endsection





@section('main-content')

<div>

	<div class="row">

		<div class="col-md-12">

			<div class="panel panel-default">

				<div class="panel-heading">ChangePassword</div>

				<form class="form-horizontal" method="post" enctype="multipart/form-data">

					<div class="panel-body">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						<div class="form-group">
							<label class="col-sm-2 control-label">
								UserName
							</label>

							<div class="col-sm-10">
								<input type="text" value="{{ Auth::user()->username }}" readonly="" class="form-control" id="ig" name="ig">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								Old Password
							</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="old_password" name="old_password">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								New Password
							</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="new_password" name="new_password">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								New Password Confirm
							</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
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