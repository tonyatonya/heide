@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">User Create / Update</div>
				<form class="form-horizontal" method="post" enctype="multipart/form-data" id="form-concept">
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
							<label for="username" class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10">
								<input type="text" value="{{ (isset($data) ? $data->username:'') }}{{ old('username') }}" class="form-control" id="username" name="username">
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" value="{{ (isset($data) ? $data->name:'') }}{{ old('name') }}" class="form-control" id="name" name="name">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="text" value="{{ (isset($data) ? $data->email:'') }}{{ old('email') }}" class="form-control" id="email" name="email">
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="password" name="password">
							</div>
						</div>
						<div class="form-group">
							<label for="password_confirmation" class="col-sm-2 control-label">Password Confirm</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="password_confirmation" name="password_confirmation">
							</div>
						</div>
					</div>
					<div class="panel-footer text-right">
						<a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-default pull-left" >Back</a>
						<button type="submit" class="btn btn-primary" id="btn-save">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



@endsection



@section('footer')


@endsection