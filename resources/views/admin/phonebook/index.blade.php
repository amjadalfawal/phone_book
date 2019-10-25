@extends('admin.master')

@section('title' ,__('admin.pages.users_index.title'))

@section('styles')
<style type="text/css">
    .action-btn {
        float: right
    }

    .dt-button {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0) !important;
        box-sizing: border-box !important;
        margin: 0 !important;
        font-family: inherit !important;
        overflow: visible !important;
        text-transform: none !important;
        -webkit-appearance: button !important;
        display: inline-block !important;
        text-align: center !important;
        vertical-align: middle !important;
        user-select: none !important;
        background-color: transparent !important;
        border: 1px solid transparent !important;
        padding: .375rem .75rem !important;
        line-height: 1.5 !important;
        border-radius: .25rem !important;
        margin-right: .5rem !important;
        margin-bottom: .5rem !important;
        outline: none !important;
        font-size: 0.8rem !important;
        font-weight: 500 !important;
        color: #16aaff !important;
        border-color: #16aaff !important;
        position: relative !important;
        transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s !important;
        cursor: pointer !important;
        background-image: none !important;
    }

    .dt-button.info {
        color: #444054 !important;
        border-color: #444054 !important;
    }

    .dt-button.info:hover,
    .dt-button.info:active {
        color: #fff !important;
        background-color: #444054 !important;
        border-color: #444054 !important;
        box-shadow: none !important;
    }

    .dt-button.danger {
        color: #d92550 !important;
        border-color: #d92550 !important;
    }

    .dt-button.danger:hover,
    .dt-button.danger:active {
        color: #fff !important;
        background-color: #d92550 !important;
        border-color: #d92550 !important;
        box-shadow: none !important;
    }

    .dt-button.alt {
        color: #794c8a !important;
        border-color: #794c8a !important;
    }

    .dt-button.alt:hover,
    .dt-button.alt:active {
        color: #fff !important;
        background-color: #794c8a !important;
        border-color: #794c8a !important;
        box-shadow: none !important;
    }

    .dt-button.light {
        color: #dcdcdc !important;
        border-color: #dcdcdc !important;
    }

    .dt-button.light:hover,
    .dt-button.light:active {
        color: #fff !important;
        background-color: #dcdcdc !important;
        border-color: #dcdcdc !important;
        box-shadow: none !important;
    }
</style>
@endsection


@section('layout-title')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i style='color: #7189bfe8 !important;' class="fa fa-address-card"></i>
            </div>

            <div>Users Mangment
                {{-- <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div> --}}
            </div>
        </div>
    </div>
</div>
@endsection


@section('main')
<div class="main-card mb-3 card">
    <div class="card-header">
        admin users table
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <table id="users-table" class="table table-hover table-striped table-bordered dataTable dtr-inline">
                    <thead>
                        <tr role="row">
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>phone number 1</th>
                            <th>phone number 2</th>
                            <th>adress</th>
                            <th>user_id</th>



                            <th>#</th>

            
                        </tr>
                        <!-- <tr role="row">
									<th><input type="text" name="id" class="form-control form-control-sm"></th>
									<th><input type="text" name="id" class="form-control form-control-sm"></th>
									<th><input type="text" name="id" class="form-control form-control-sm"></th>
									<th><input type="text" name="id" class="form-control form-control-sm"></th>
									<th><input type="text" name="id" class="form-control form-control-sm"></th>
									<th>#</th>
								</tr> -->
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="btn-actions-pane-right text-capitalize">
            <a href="{{route('create.phonebook')}}">
                <button class="btn btn-lg btn-primary">
                    Create
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

	        $('#users-table').DataTable({
				dom: 'Bfrtip',
				responsive: false,
				altEditor: true, // Enable altEditor
				processing: true,
		        serverSide: true,
	            paging: true,
				buttons: [
                    {
                        extend: 'csvHtml5',
                        text: 'CSV',
                        charset: 'utf-8',
                        extension: '.csv',
                        filename: 'export',
                        bom: true,
                        className: 'info'
                    },

                    {
                        extend: 'print',
                        text: 'Print',
                        className: 'alt'
                    },

                    {
                        extend: 'pdfHtml5',
                        text: 'PDF',
                        className: 'danger'
                    },

                    {
                        extend: 'copyHtml5',
                        text: 'Copy',
                        className: 'light'
                    }
                ],
	           	ordering:  true,
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
			        { data: 'user_name' },
			        { data: 'email' },
                    { data: 'phone_number_1' },
                    { data: 'phone_number_2' },
                    { data: 'adress' },
                    { data: 'user_id' },



			        {
			        	data: null,
                        orderable: false,
			        	render: function (data , type , row) {
			        		return `
								<button class="m-1 btn btn-danger action-btn btn-show-swal" data-type="danger" onclick="deleteUser(${row.id});">delete</button>
			        			<a href="/admin/phone_book/${row.id}/edit">
		        					<button class="m-1 btn btn-secondary action-btn">edit</button>
								</a>
			        		`;
			        	}
			        } // override renderer
			    ]
	        });
		});

        function deleteUser(userId)
        {
        	Swal.fire({
			  title: '{{__('admin.pages.users_index.are_you_sure')}}',
			  text: '{{__('admin.pages.users_index.you_wont_be_able')}}',
			  type: '{{__('admin.pages.users_index.warning')}}',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: '{{__('admin.pages.users_index.yes_delete_it')}}',
              cancelButtonText: '{{__('admin.pages.users_index.cancel')}}',
			}).then((result) => {
			  if (result.value) {
			    //ajax
			    $.ajax({
			    	method: 'POST',
			    	url: `/admin/users/${userId}/delete`,
			    	data: {
			    		_token: $('[name=_token]').val()
			    	}
			    }).done(response => {
			    	if (response == 1){
					    Swal.fire(
					      '{{__('admin.pages.users_index.deleted')}}',
					      '{{__('admin.pages.users_index.has_been_deleted')}}',
					      '{{__('admin.pages.users_index.success')}}'
					    );
					    $('#users-table').DataTable().ajax.reload();
					}
					else
						Swal.file(
                          '{{__('admin.pages.users_index.error')}}',
					      '{{__('admin.pages.users_index.something_wrong')}}',
					      '{{__('admin.pages.users_index.error')}}'
						);
			    })
			  }
			});
	}

</script>
@endsection
