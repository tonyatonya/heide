@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Executive BIO</div>
				<div class="panel-body">
					<a class="btn btn-success" href="{{ url('admin/Executive/create') }}" style="margin-bottom: 10px;">
                      <i class="fa fa-fw fa-plus"></i> ADD
                    </a>
					<table class="table table-bordered table-hover">
					  <tr>
					  	<th>#</th>
              <th>Cover Photo</th>
              <th>Name EN</th>
              <th>Name CH</th>
              <th></th>
					  </tr>
             @foreach($data as $key=>$val)
               <tr>
                <td>{{ $key + 1 }}</td>
                <td><img src="{{ asset('images/thumbs/'.$val->photo) }}" class="img-responsive" style="    max-height: 150px;"></td>
                <td>{{ $val->name_en }}</td>
                <td>{{ $val->name_ch }}</td>
                <td>
                   <a href="{{ asset('admin/Executive/edit/'.$val->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                </td>
              </tr>
            @endforeach  
					</table>
					<?php echo $data->render(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
