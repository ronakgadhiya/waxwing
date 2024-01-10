<div class="modal fade show" id="Modal" tabindex="-1" aria-modal="true" aria-labelledby="ModalLabel" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ModalLabel"><span id="edit">Add</span> Gallery Image</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
				{!! Form::open(['id' => "Form",'enctype' => "multipart/form-data"]) !!}
					{!! Form::hidden('id','',['id'=>"id"]) !!}
			<div class="modal-body">
				<div class="row"><div class="col-md-12"><div id="response"></div></div></div>
				<div class="form-group">
					{!! Form::label('img', 'Image', ['class' => 'form-label']) !!} <br>
						{!! Form::file('img',['id'=>"img",'class'=>'form-control']) !!}
				</div>
			</div>
			<div class="modal-footer">
				{!! Form :: button (__('common.close'), ['class' => 'btn btn-secondary','data-bs-dismiss' => "modal"]) !!}
				{!! Form :: submit (__('common.save'), ['class' => 'btn btn-primary']) !!}
			</div>
		</div>
	</div>
</div>