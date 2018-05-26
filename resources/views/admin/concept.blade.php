@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Concept</div>
				<div class="panel-body">
					<a class="btn btn-success" href="{{ url('admin/Concept/create') }}" style="margin-bottom: 10px;">
                      <i class="fa fa-fw fa-plus"></i> ADD
                    </a>
					<table class="table table-bordered table-hover">
					  <tr>
					  	<th>#</th>
                        <th>Cover Photo</th>
                        <th>Topic EN</th>
                        <th>Topic CH</th>
                        <th></th>
                        <th></th>
                        <th></th>
					  </tr>
                       @foreach($data as $key=>$val)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                          <td><img src="{{ asset('images/thumbs/'.$val->photo) }}" class="img-responsive" style="    max-height: 150px;"></td>
                          <td>{{ $val->topic_en }}</td>
                          <td>{{ $val->topic_ch }}</td>
                          <td  class="text-center" style="vertical-align: middle;">
                            @if($min_sort != $val->sort)
                              <a href="{{ asset('admin/Concept/up/'.$val->id) }}"><i class="fa fa-fw  fa-arrow-up"></i></a>
                            @endif
                            @if($max_sort != $val->sort)
                              <a href="{{ asset('admin/Concept/down/'.$val->id) }}"><i class="fa fa-fw  fa-arrow-down"></i></a>
                            @endif
                          </td>
                          <td  class="text-center" style="vertical-align: middle;">
                            <a href="{{ asset('admin/Concept/edit/'.$val->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                          </td>
                          <td class="text-center" style="vertical-align: middle;">
                            <a href="{{ asset('admin/Concept/delete/'.$val->id) }}"><i class="fa fa-fw fa-trash-o"></i></a>
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
