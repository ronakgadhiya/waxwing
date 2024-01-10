<div class="modal fade show" id="ModalInquiry"  tabindex="-1" aria-modal="true" aria-labelledby="ModalLabel" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel"><span id="edit">Add</span> Product Inquiry</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
                	{!! Form::open(['id' => "InquiryForm",'url' => route('inquiry.add'), "method" => "POST",'enctype' => "multipart/form-data"]) !!}
               	 	{!! Form::hidden('product_id',$Product[0]['id'],['id'=>"product_id"]) !!}
				<div class="modal-body">
					<div class="row"><div class="col-md-12"><div id="response"></div></div></div>
					<div class="form-group">
						{!! Form::label('name', 'Name', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
						{!! Form::text('name','',['id'=>"name",'class'=>"form-control","required"=>"name"]) !!}
					</div>
					<div class="form-group mt-3">
						{!! Form::label('email', 'Email', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
						{!! Form::text('email','',['id'=>"email",'class'=>"form-control","required"=>"email"]) !!}
					</div>

					<div class="form-group mt-3">
						{!! Form::label('mobile', 'Mobile No.', ['class' => 'form-label']) !!}<i class="text-danger"> *</i>
						{!! Form::text('mobile','',['id'=>"mobile",'class'=>"form-control required","required"=>"mobile"]) !!}
					</div>

					<div class="form-group mt-3">
						{!! Form::label('message', 'Message', ['class' => 'form-label']) !!}
						{!! Form::textarea('message', null, ['class' => 'form-control','id' => 'message', 'rows'=> 4]) !!}
					</div>
					
				</div>
				<div class="modal-footer">
					{!! Form :: button (__('common.close'), ['class' => 'btn btn-secondary','data-bs-dismiss' => "modal"]) !!}
					{!! Form :: submit (__('common.save'), ['class' => 'btn btn-primary']) !!}
				</div>
				{!! Form::close() !!}
			</div>
		</div>
</div>

