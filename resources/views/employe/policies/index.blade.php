@extends('agency.master')

@section('title' , __('admin.pages.policies_index.title'))

@section('styles')
	<style type="text/css">
		.action-btn
	 	{
	 		float: right
	 	}
	</style>
@endsection


@section('layout-title')
    <div class="app-page-title">
        <div class="page-title-wrapper">
			<div class="page-title-heading">
				<div class="page-title-icon">
                    <i style='color: #7189bfe8 !important;' class="fa fa-file"></i>
				</div>
					<div>{{ __('admin.pages.policies_index.policies_dashboard')}}
			    	{{-- <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div> --}}
				</div>
			</div>
		</div>
	</div>
@endsection


@section('main')
		<div class="main-card mb-3 card">
			<div class="card-header">
				{{ __('admin.pages.policies_index.manage_policies')}}

			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12">
						<table id="policies-table" class="table table-hover table-striped table-bordered dataTable dtr-inline">
							<thead>
								<tr role="row">
									<th>{{ __('admin.pages.policies_index.id')}}</th>
									<th>{{ __('admin.pages.policies_index.creation_date')}}</th>
									<th>{{ __('admin.pages.policies_index.expiration_date')}}</th>
									<th>{{ __('admin.pages.policies_index.first_name')}}</th>
									<th>{{ __('admin.pages.policies_index.last_name')}}</th>
									<th>{{ __('admin.pages.policies_index.price')}}</th>
									<th>{{ __('admin.pages.policies_index.passport_id')}}</th>
									<th>{{ __('admin.pages.policies_index.travel_date')}}</th>
									<th>{{ __('admin.pages.policies_index.come_date')}}</th>
									<th>{{ __('admin.pages.policies_index.origin_city')}}</th>
									<th>{{ __('admin.pages.policies_index.destination_city')}}</th>
									<th>#</th>
								</tr>
								{{-- <tr role="row">
									<th><input type="text" name="id" class="form-control form-control-sm"></th>
									<th><input type="text" name="id" class="form-control form-control-sm"></th>
									<th><input type="text" name="id" class="form-control form-control-sm"></th>
									<th><input type="text" name="id" class="form-control form-control-sm"></th>
									<th><input type="text" name="id" class="form-control form-control-sm"></th>
									<th>#</th>
								</tr> --}}
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<div class="btn-actions-pane-right text-capitalize">
					<a href="{{route('agent.create.policies')}}">
						<button class="btn btn-lg btn-primary">
							{{__('agent.pages.users_index.create')}}
						</button>
					</a>
				</div>
			</div>
		</div>
@endsection


@section('scripts')
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script type="text/javascript">
		$(document).ready(() => {

	        $('#policies-table').DataTable({
				dom: 'Bfrtip',
				responsive: false,
				altEditor: true, // Enable altEditor
				processing: true,
		        serverSide: true,
	            paging: true,
				buttons: [
				{
					extend: 'csv',
					text: 'csv',
					charset: 'utf-8',
					extension: '.csv',
					filename: 'export',
					bom: true
				},
	
				'copy','print'

			],
	           	ordering:  true,
                scrollX: true,
	           	ajax: {
	           		method: 'POST',
			        url: '',
			        dataSrc: 'data',
			        data : {
			        	_token :$('[name=_token]').val()
			        },
			        header: {
			        	'X-CSRF-TOKEN' : $('[name=_token]').val()
			        }
			    },
			    columns: [
			        { data: 'id' },
			        { data: 'creation_date' },
			        { data: 'expiration_date' },
			        { data: 'first_name' },
			        { data: 'last_name' },
					{ data: 'price' },
					{ data: 'passport_id' },
					{ data: 'travel_date' },
					{ data: 'come_date' },
					{ data: 'origin_city.name_{{App::getLocale()}}',orderable: false },
					{ data: 'destination_city.name_{{App::getLocale()}}', orderable: false,},
			        {
			        	data: '#',
                        orderable: true,
			        	render: function (data , type , row) {
			        		return `
			        			<a href="/agent/policies/${row.id}">
		        					<button class="m-1 btn btn-primary action-btn">{{__('admin.pages.policies_index.show')}}</button>
								</a>
								<button class="m-1 btn btn-danger action-btn btn-show-swal" data-type="danger" onclick="deleteUser(${row.id});">{{__('admin.pages.users_index.delete')}}</button>
			        			<a href="/agent/policies/${row.id}/edit">
		        					<button class="m-1 btn btn-secondary action-btn">{{__('admin.pages.users_index.edit')}}</button>
								</a>
			        		`;
			        	}

			        } // override renderer
			    ]
	        });
		});

	</script>
@endsection
