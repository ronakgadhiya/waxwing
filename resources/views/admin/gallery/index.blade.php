
@extends('admin.main.headerfooter')
@section('contain')

<style>
.border-primary img {
    height: 130px !important;
    width: 100% !important;
    margin: 0 auto;
    max-height: 130px !important;
}
</style>

	<div class="page-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-12 col-lg-12 mx-auto">
					<h5 class="mb-0 text-uppercase">Gallery <button type="button" class="btn btn-sm btn-outline-primary px-5 radius-30 float-end" data-bs-toggle="modal" data-bs-target="#Modal" onclick="chechdata()"><i class="bx bx-plus mr-1"></i>{{ __('common.add') }}</button></h5>
					<hr class="mt-4"/>
					<div class="card">
						<div class="card-body" style="height: 540px">
							<div class="row addimg">
								@foreach ($gallery as $item)
									<div class="col-md-2 border-primary mb-4" id="galleryimg_{{$item->id}}" style="position: relative;">
										<img src="{{asset('uplods/gallery')}}/{{$item->img}}" alt="..." class="img-fluid rounded" style="width: 100%;">
										<button type="button" class="btn btn-danger btn-sm" onclick="actiondelete({{$item->id}})" style="position: absolute;top: 0px;right: 12px;"><i class="bx bx-trash-alt me-0"></i></button>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@include('admin.gallery.form')
@endsection
@section('script')
@include('admin.gallery.script')
@endsection