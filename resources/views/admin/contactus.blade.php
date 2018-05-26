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

					<div class="box-title">Contactus Banner</div>

					<div class="box-tools pull-right">

	                	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

	                </div>

                </div>

				<div class="box-body">

					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-banner" style="margin-bottom: 10px;">

		              Upload Image

		            </button>

					<img src="{{ asset('images/'.$banner->img_name) }}" class="img-responsive">

				</div>

			</div>

		</div>

		<div class="col-md-12">

			<div class="box box-success">

				<div class="box-header with-border">

					<div class="box-title">Investor</div>

					<div class="box-tools pull-right">

	                	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

	                </div>

                </div>

				<div class="box-body">

				 <div class="col-md-12">

				   <form class="form-horizontal" action="{{ url('admin/Contactus/investor') }}" method="post" enctype="multipart/form-data">

					<div class="form-group">

	                  <label for="topic_en" class="col-sm-2 control-label">Topic EN</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($investor) ? $investor->topic_en:'') }}" class="form-control" id="topic_en" name="topic_en">

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="detail_en" class="col-sm-2 control-label">Detail EN</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="detail_en" name="detail_en" class="form-control">{{ (isset($investor) ? $investor->detail_en:'') }}</textarea>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="topic_en" class="col-sm-2 control-label">Topic CH</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($investor) ? $investor->topic_ch:'') }}" class="form-control" id="topic_ch" name="topic_ch">

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="detail_en" class="col-sm-2 control-label">Detail CH</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="detail_ch" name="detail_ch" class="form-control">{{ (isset($investor) ? $investor->detail_ch:'') }}</textarea>

	                  </div>

	                </div>

	                <div class="text-right">

                     <button type="submit" class="btn btn-primary">Save</button>

	                </div>

	               </form>

	              </div>

				</div>

			</div>

		</div>

		<div class="col-md-12">

			<div class="box box-success">

				<div class="box-header with-border">

					<div class="box-title">Contactus</div>

					<div class="box-tools pull-right">

	                	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

	                </div>

                </div>

				<div class="box-body">

				 	<button type="button" id="add-contactus" class="btn btn-success" data-toggle="modal" data-target="#modal-office" style="margin-bottom: 10px;">

		              <i class="fa fa-fw fa-plus" ></i> ADD

		            </button>

		            <table class="table table-bordered table-hover">

					  <tr>

						  <th>#</th>

			              <th>Office EN</th>

			              <th>Company EN</th>

			              <th>Office CH</th>

			              <th>Company CH</th>

			              <th></th>

						  </tr>

			             @foreach($contact as $key=>$val)

			               <tr>

			                <td>{{ $key + 1 }}</td>

			                <td>{{ $val->office_en }}</td>

			                <td>{{ $val->company_en }}</td>

			                <td>{{ $val->office_ch }}</td>

			                <td>{{ $val->company_ch }}</td>

			                <td>

			                   <a href="javascript:void(0)" class="edit-location" id="{{ $val->id }}" data-toggle="modal" data-target="#modal-office"><i class="fa fa-fw fa-edit"></i></a>

			                </td>

			                <th>

			                	<a href="{{ url('admin/Contactus/deloffice/'.$val->id) }}" style="color: red;"><i class="fa fa-fw fa-trash-o"></i></a>

			                </th>

			              </tr>

			            @endforeach  

					  </table>

				</div>

			</div>

		</div>

		<div class="col-md-12">

			<div class="box box-success">

				<div class="box-header with-border">

					<div class="box-title">Location</div>

					<div class="box-tools pull-right">

	                	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

	                </div>

                </div>

				<div class="box-body">

				 	<a href="{{ url('admin/Contactus/location') }}" id="add-contactus" class="btn btn-success"style="margin-bottom: 10px;">

		              <i class="fa fa-fw fa-plus" ></i> ADD

		            </a>

		            <table class="table table-bordered table-hover">

					  <tr>

						  <th>#</th>

			              <th>Location EN</th>

			              <th>Location CH</th>

			              <th></th>

			              <th></th>

					  </tr>

					  @foreach($localtion as $key=>$val)

			               <tr>

			                <td>{{ $key + 1 }}</td>

			                <td>{{ $val->location_en }}</td>

			                <td>{{ $val->location_ch }}</td>

			                <td>

			                   <a href="{{ url('admin/Contactus/locationedit/'.$val->id) }}" class="edit-location"><i class="fa fa-fw fa-edit"></i></a>

			                </td>

			                <th>

			                	<a href="{{ url('admin/Contactus/dellocation/'.$val->id) }}" style="color: red;"><i class="fa fa-fw fa-trash-o"></i></a>

			                </th>

			              </tr>

			            @endforeach  

					</table>

				</div>

			</div>

		</div>

	</div>

	

	<div class="modal fade" id="modal-banner">

	   <div class="modal-dialog">

	     <div class="modal-content">

	        <form method="post" action="{{ url('admin/Contactus/banner') }}" enctype="multipart/form-data">

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

	<div class="modal fade" id="modal-office">

	   <div class="modal-dialog">

	     <div class="modal-content">

	     <div class="modal-header">

		         <button type="button" class="close" data-dismiss="modal" aria-label="Close">

		         <span aria-hidden="true">×</span></button>

		           <h4 class="modal-title">Office</h4>

		       </div>

	        <form class="form-horizontal" action="{{ url('admin/Contactus/office') }}" id="form-contactus" method="post" enctype="multipart/form-data">

				  <div class="col-md-12" style="padding-top: 10px;">	

					<div class="form-group">

	                  <label for="office_en" class="col-sm-2 control-label">Office EN</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($contactus) ? $contactus->office_en:'') }}" class="form-control" id="office_en" name="office_en">

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="detail_en" class="col-sm-2 control-label">Company EN</label>

	                  <div class="col-sm-10">

	                  	<input type="text" value="{{ (isset($contactus) ? $contactus->company_en:'') }}" class="form-control" id="company_en" name="company_en">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="address_en" class="col-sm-2 control-label">Address EN</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="address_en" name="address_en" class="form-control">{{ (isset($contactus) ? $contactus->address_en:'') }}</textarea>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="office_en" class="col-sm-2 control-label">Office CH</label>

	                  <div class="col-sm-10">

	                    <input type="text" value="{{ (isset($contactus) ? $contactus->office_ch:'') }}" class="form-control" id="office_ch" name="office_ch">

	                  </div>

	                </div>

					<div class="form-group">

	                  <label for="detail_en" class="col-sm-2 control-label">Company CH</label>

	                  <div class="col-sm-10">

	                  	<input type="text" value="{{ (isset($contactus) ? $contactus->company_ch:'') }}" class="form-control" id="company_ch" name="company_ch">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="address_ch" class="col-sm-2 control-label">Address CH</label>

	                  <div class="col-sm-10">

	                    <textarea rows="5" id="address_ch" name="address_ch" class="form-control">{{ (isset($contactus) ? $contactus->address_ch:'') }}</textarea>

	                  </div>

	                </div>

	                   <br/><br/>

	                <div class="form-group">

	                  <label for="tel" class="col-sm-2 control-label">Tel</label>

	                  <div class="col-sm-10">

	                  	<input type="text" value="{{ (isset($contactus) ? $contactus->tel:'') }}" class="form-control" id="tel" name="tel">

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="email" class="col-sm-2 control-label">E-mail</label>

	                  <div class="col-sm-10">

	                  	<input type="text" value="{{ (isset($contactus) ? $contactus->email:'') }}" class="form-control" id="email" name="email">

	                  </div>

	                </div> 

	                </div>

	                <div class="modal-footer">

	                	<input type="hidden" name="id" id="id">

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



   			$('.edit-location').click(function(){

   				$.get( "{{ url('admin/Contactus/contactus') }}", { id: $(this).attr('id') },function(data){

   					$('#office_en').val(data.office_en);

   					$('#company_en').val(data.company_en);

   					$('#address_en').val(data.address_en);

   					$('#office_ch').val(data.office_ch);

   					$('#company_ch').val(data.company_ch);

   					$('#address_ch').val(data.address_ch);

   					$('#tel').val(data.tel);

   					$('#email').val(data.email);

   					$('#id').val(data.id);

   					$('#form-contactus').attr('action',"{{ url('admin/Contactus/officeedit') }}");

   				},"json");

   			});

   			$('#add-contactus').click(function(){

   					$('#office_en').val('');

   					$('#company_en').val('');

   					$('#address_en').val('');

   					$('#office_ch').val('');

   					$('#company_ch').val('');

   					$('#address_ch').val('');

   					$('#tel').val('');

   					$('#email').val('');

   					$('#id').val('');

   					$('#form-contactus').attr('action',"{{ url('admin/Contactus/office') }}");

   			});



   		});

   </script>

@endsection
