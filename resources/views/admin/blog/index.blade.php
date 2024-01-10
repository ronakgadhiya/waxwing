@extends('admin.main.headerfooter')
@section('contain')
	<div class="page-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-12 col-lg-12 mx-auto">
					<h5 class="mb-0 text-uppercase">Blog<button type="button" class="btn btn-sm btn-outline-primary px-5 radius-30 float-end" data-bs-toggle="modal" data-bs-target="#Modal" onclick="chechdata()"><i class="bx bx-plus mr-1"></i>{{ __('common.add') }}</button></h5>
					<hr class="mt-4"/>
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table id="dataTableBuilder" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th></th>
											<th><div class="col-sm-12 datatable-form-filter no-padding"><input type="text" class="form-control" name="filter_name" autocomplete="off" placeholder="Search By Name"></div></th>
											<th><div class="col-sm-12 datatable-form-filter no-padding">{!! Form::select('filter_categorie',['' => 'Select Blog Category']+$BlogCategory,null,['id' => 'filter_categorie','class' => 'form-select form-control']) !!}</div></th>
											<th></th>
											<th></th>
										</tr>
										<tr>
											<th>{{ __('common.no') }}</th>
											<th>{{ __('common.name') }}</th>
											<th>{{ __('common.blogcategory') }}</th>
											<th>{{ __('common.status') }}</th>
											<th>{{ __('common.action') }}</th>
										</tr>
									</thead>
									<tbody>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@include('admin.blog.form')
@endsection
@section('script')
<script type="text/javascript">
    var name="{{ __('common.name') }}";
    var blogcategory="{{ __('common.blogcategory') }}";
    var status="{{ __('common.status') }}";
    var action="{{ __('common.action') }}";

    (function (window, $) {
        window.LaravelDataTables = window.LaravelDataTables || {};
        window.LaravelDataTables["dataTableBuilder"] = $("#dataTableBuilder").DataTable({
            "serverSide": true,
            "processing": true,
            "ajax": {
                data: function (d) {
                    d.name = jQuery(".datatable-form-filter input[name='filter_name']").val();
                    d.category = jQuery(".datatable-form-filter select[name='filter_categorie']").val();
                }
            },
            "columns": [ 
				{
					"data":'id',
					"render": function ( data, type, row, meta ) {
						var info = window.LaravelDataTables["dataTableBuilder"].page.info();
							if(info.page==0){
								return (meta.row+1);
							} else {
								var no=info.page*10;
								return (meta.row+1)+no;	
							}
						},
					"orderable": false,
                    "searchable": false,
				},
				{
					"name": "name",
                    "data": "name",
                    "title": name,
                    "orderable": false,
                    "searchable": false 
                },
				{
					"name": "category",
                    "data": "category",
                    "title": blogcategory,
                    "orderable": false,
                    "searchable": false 
                },
				{
					"name": "status",
                    "data": "status",
                    "title": status,
                    "render": null,
                    "orderable": false,
                    "searchable": false,
				},
				{
					"name": "action",
                    "data": "action",
                    "title": action,
                    "render": null,
                    "orderable": false,
                    "searchable": false,
                    // "width": "80px"
                }],
            "searching": false,
            //"dom": "<\"wrapper\">rtilfp",
            // "dom":`<'row'<'col-sm-12'tr>>
            // <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
            "oLanguage": {
              "sLengthMenu": "Display &nbsp;_MENU_",
            },
            "stateSave": true,
            responsive: true,
            colReorder: true,
            scrollY: '50vh',
            scrollX: true,
            "buttons": [],
            "order": [[ 0, "asc" ]],
            "pageLength":10,
        });
    })(window, jQuery);
</script>
@include('admin.comman.datatablefiltar')
@include('admin.comman.commonscript')
@include('admin.blog.script')
@endsection