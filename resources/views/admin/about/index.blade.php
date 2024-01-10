@extends('admin.main.headerfooter')
@section('contain')

	<div class="page-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-12 col-lg-12 mx-auto">
					<h5 class="mb-0 text-uppercase">About Us</h5>
					<hr class="mt-4"/>
					<div class="card">
						<div class="card-body">
							{!! Form::model($Aboutus,array('role'=>"form",'enctype' => 'multipart/form-data')) !!}
							{{-- {!! Form::open(['id' => "Form",'enctype' => "multipart/form-data"]) !!} --}}
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										{!! Form::label('title', 'Start Title', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('title',null,['id'=>"title",'class'=>"form-control"]) !!}
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										{!! Form::label('img', 'Start Image', ['class' => 'form-label']) !!} <br>
										{!! Form::file('img',['id'=>"img",'class'=>'form-control']) !!}
									</div>	
								</div>
								<div class="col-md-2">
									<div style="position: relative;"><span class="spanremovebtn" onclick="deleteimage('{{$Aboutus->id}}',\'Aboutus\',\'img\')" >X</span><img src="{{asset('uplods/about')}}/{{$Aboutus->img}}" class="img-fluid rounded" style="width: 100%; height: 120px;" ></div>
								</div>
								<div class="col-md-12 mt-2">
									<div class="form-group">
										{!! Form::label('description', 'Start Descriptation', ['class' =>  'form-label']) !!}
										{!! Form::textarea('description',null,["class"=>"form-control","id"=>"description",'rows' => "5"]) !!}
									</div>	
								</div>
								<div class="col-md-4 mt-3">
									<div class="form-group">
										{!! Form::label('count1', 'Count', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('count1',null,['id'=>"count1",'class'=>"form-control"]) !!}
									</div>	
								</div>
								<div class="col-md-4 mt-3">
									<div class="form-group">
										{!! Form::label('count2', 'Count', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('count2',null,['id'=>"count2",'class'=>"form-control"]) !!}
									</div>	
								</div>
								<div class="col-md-4 mt-3">
									<div class="form-group">
										{!! Form::label('count3', 'Count', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('count3',null,['id'=>"count3",'class'=>"form-control"]) !!}
									</div>	
								</div>
								<div class="col-md-4 mt-3">
									<div class="form-group">
										{!! Form::label('counttitle1', 'Count Title', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('counttitle1',null,['id'=>"counttitle1",'class'=>"form-control"]) !!}
									</div>	
								</div>
								<div class="col-md-4 mt-3">
									<div class="form-group">
										{!! Form::label('counttitle2', 'Count Title', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('counttitle2',null,['id'=>"counttitle2",'class'=>"form-control"]) !!}
									</div>	
								</div>
								<div class="col-md-4 mt-3">
									<div class="form-group">
										{!! Form::label('counttitle3', 'Count Title', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('counttitle3',null,['id'=>"counttitle3",'class'=>"form-control"]) !!}
									</div>	
								</div>
								<div class="col-md-6 mt-2">
									<div class="form-group">
										{!! Form::label('title1', 'End Title', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('title1',null,['id'=>"title1",'class'=>"form-control"]) !!}
									</div>	
								</div>
								<div class="col-md-4 mt-2">
									<div class="form-group">
										{!! Form::label('img1', 'End Image', ['class' => 'form-label']) !!} <br>
										{!! Form::file('img1',['id'=>"img1",'class'=>'form-control']) !!}
									</div>	
								</div>
								<div class="col-md-2 mt-2">
									<div style="position: relative;"><span class="spanremovebtn" onclick="deleteimage('{{$Aboutus->id}}',\'Aboutus\',\'img1\')" >X</span><img src="{{asset('uplods/about')}}/{{$Aboutus->img1}}" class="img-fluid rounded" style="width: 100%; height: 120px;" ></div>
								</div>
								<div class="col-md-12 mt-2">
									<div class="form-group">
										{!! Form::label('description1', 'End Descriptation', ['class' =>  'form-label']) !!}
										{!! Form::textarea('description1',null,["class"=>"form-control","id"=>"description1",'rows' => "5"]) !!}
									</div>	
								</div>
								<div class="col-md-12 mt-3">
									{!! Form :: submit (__('common.save'), ['class' => 'btn btn-primary']) !!}
								</div>
							</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">

@if (session('success'))
$(document).ready(function () {
	console.log('dfghuiskdgui');
	Swal.fire({
		position: 'center',
		icon: 'success',
		title: 'Change Successfully',
		showConfirmButton: false,
		timer: {{ config('constants.websetting.sweatalertdelytime') }}
	})
});
@endif
</script>
@endsection