@extends('admin.main.headerfooter')
@section('contain')

	<div class="page-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-12 col-lg-12 mx-auto">
					<h5 class="mb-0 text-uppercase">Social</h5>
					<hr class="mt-4"/>
					<div class="card">
						<div class="card-body">
							{!! Form::model($social,array('role'=>"form",'enctype' => 'multipart/form-data')) !!}
							{{-- {!! Form::open(['id' => "Form",'enctype' => "multipart/form-data"]) !!} --}}
                            <div class="row">
                                <div class="col-md-4">
									<div class="form-group">
										{!! Form::label('youtube_link', 'youtube', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('youtube_link',null,['id'=>"youtube_link",'class'=>"form-control"]) !!}
									</div>
                                </div>
                                <div class="col-md-4">
									<div class="form-group">
										{!! Form::label('google_link', 'google', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('google_link',null,['id'=>"google_link",'class'=>"form-control"]) !!}
									</div>
                                </div>
                           
                                <div class="col-md-4">
                                    <div class="form-group">
										{!! Form::label('printrest_link', 'printrest', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('printrest_link',null,['id'=>"printrest_link",'class'=>"form-control"]) !!}
									</div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										{!! Form::label('facebook_link', 'facebook', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('facebook_link',null,['id'=>"facebook_link",'class'=>"form-control"]) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">	
									<div class="form-group">
										{!! Form::label('intragram_link', 'intragram', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
										{!! Form::text('intragram_link',null,['id'=>"intragram_link",'class'=>"form-control"]) !!}
                                    </div>
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