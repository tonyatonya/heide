@extends('app')
@section('htmlheader_title')
    Home
@endsection
@section('main-content')
<div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">User</div>
        <div class="panel-body">
          <a class="btn btn-success" href="{{ url('admin/User/create') }}" style="margin-bottom: 10px;">
                      <i class="fa fa-fw fa-plus"></i> ADD
                    </a>
          <table class="table table-bordered table-hover">
            <tr>
              <th>#</th>
              <th>UserName</th>
              <th>Name</th>
              <th>Email</th>
              <th></th>
            </tr>
              @foreach($data as $key=>$val)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $val->username }}</td>
                  <td>{{ $val->name }}</td>
                  <td>{{ $val->email }}</td>
                  <td>
                    <a href="{{ asset('admin/User/edit/'.$val->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                  </td>
                </tr>
              @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

