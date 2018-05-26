<?php 

  use App\Model\GalleryImg;

?>
@extends('app')
@section('htmlheader_title')
    Home
@endsection
@section('main-content')
<div>
	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-default">

				<div class="panel-heading">Gallery</div>

				<div class="panel-body">

					<a class="btn btn-success" href="{{ url('admin/Gallery/create') }}" style="margin-bottom: 10px;">

                      <i class="fa fa-fw fa-plus"></i> ADD

                    </a>

					<table class="table table-bordered table-hover">

					  <tr>

					  	<th>#</th>

              <th>Cover Photo</th>

              <th>Name EN</th>

              <th>Name CH</th>

              <th>Type</th>

              <th></th>

              <th></th>

					  </tr>

            @foreach($data as $key => $val)

              <tr>

                <td>{{ $key+1 }}</td>

                <td>
                  @if($val->type=='Video')
                    <img style="max-height: 150px;"  src="{{ asset('/images/'.$val->photo) }}" class="img-responsive">
                  @elseif($val->type=='Photo')
                    <?php 
                      $photo = GalleryImg::where('ref_id',$val->id)->first();
                    ?>
                    @if(count($photo)>0)
                    <img style="max-height: 150px;" src="{{ asset('/images/Gallery/'.$photo->img_name) }}" class="img-responsive">
                    @endif
                  @endif
                </td>

                <td>{{ $val->name_en }}</td>

                <td>{{ $val->name_ch }}</td>

                <td>{{ $val->type }}</td>

                <td class="text-center" style="vertical-align: middle;">

                   <a href="{{ asset('admin/Gallery/edit/'.$val->id) }}"><i class="fa fa-fw fa-edit"></i></a>

                </td>

                <td class="text-center" style="vertical-align: middle;">

                  <a href="{{ asset('admin/Gallery/delete/'.$val->id) }}"><i class="fa fa-fw fa-trash-o"></i></a>

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

