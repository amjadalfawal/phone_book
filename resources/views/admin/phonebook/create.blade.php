@extends('admin.master')

@section('title' , __('admin.pages.user_create.title'))

@section('styles')
<style type="text/css">
    .action-btn {
        float: right
    }

</style>
@endsection

{{--
@section('layout-title')
    <div class="app-page-title">
        <div class="page-title-wrapper">
			<div class="page-title-heading">
				<div class="page-title-icon">
				    <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
				</div>
					<div>Users Management
			    	<!-- <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div> -->
				</div>
			</div>
		</div>
	</div>
@endsection
 --}}

@section('main')
<div class="main-card mb-3 card">
    <form action="/admin/phone_book/store" method="post">
        @csrf
        <div class="card-header">
			create new user
		</div>
        <div class="card-body">
            <div class="row">


                <div class="col-md-6 form-group">
                    <label class="mr-2">user name:</label>
                    <input required  class="form-control"  type="text" name="username" id="username">
                </div>
                <div class="col-md-6 form-group">
                    <label class="mr-2">email:</label>
                    <input   class="form-control" type="email" name="email" id="email">
                </div>
                <div class="col-md-6 form-group">
                    <label>phone number:</label>
                    <input required  class="form-control"  type="text" name="phone_number_1" id="phone_number_1">
                </div>
                <div class="col-md-6 form-group">
                        <label>phone number 2:</label>
                        <input   class="form-control"  type="text" name="phone_number_2" id="phone_number_2">
                    </div>
                <div class="col-md-6 form-group">
                    <label>adress:</label>
                    <input required   class="form-control"  type="text" name="adress" id="adress">
                </div>
               


					{{-- <select name="status_id" id="status_id" class="form-control" required>
							<option> {{__('admin.pages.agent_create.select_status')}}</option>
							@foreach($statuses as $status)
								<option value="{{$status->id}}">{{$status->{'name_' .App::getLocale() } }}</option>
							@endforeach
						</select>


						<select name="status_id" id="status_id" class="form-control" required>
								<option> {{__('admin.pages.agent_create.select_status')}}</option>
								@foreach($statuses as $status)
									<option value="{{$status->id}}">{{$status->{'name_' .App::getLocale() } }}</option>
								@endforeach
							</select> --}}

            </div>
        </div>
        <div class="card-footer">
            <div class="row m-1">
                <button type="submit" class="btn btn-primary">
                    create
                </button>
            </div>
        </div>
</div>
</form>

@endsection


@section('scripts')

<script>

            // $.ajax({
			// 	method: 'POST',
			//     	url: `/admin/users/company/{id}`,
			//     	data: {
			//     		_token: $('[name=_token]').val()
			//     	}
			//     }).done(response => {
			//     	if (response == 1){
			// 		    Swal.fire(
			// 		      '{{__('admin.pages.users_index.deleted')}}',
			// 		      '{{__('admin.pages.users_index.has_been_deleted')}}',
			// 		      '{{__('admin.pages.users_index.success')}}'
			// 		    );
			// 		    $('#users-table').DataTable().ajax.reload();
			// 		}
			// 		else
			// 			Swal.file(
            //               '{{__('admin.pages.users_index.error')}}',
			// 		      '{{__('admin.pages.users_index.something_wrong')}}',
			// 		      '{{__('admin.pages.users_index.error')}}'
			// 			);
			//     })
			//   }
			// });
</script>
@endsection
