@extends('admin.master')

@section('title' , __('admin.pages.user_edit.title'))

@section('styles')
	<style type="text/css">
		.action-btn
	 	{
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
			{!! Form::model($user , ['url' => route('update.user' , $user->id)] ) !!}
			<div class="card-header">
				{{__('admin.pages.user_edit.edit_user')}}
			</div>
			<div class="card-body">
				<div class="row">
						<div class="col-md-6 form-group">
								{!!  Form::label('name', __('admin.pages.user_edit.full_name')) !!}
								{!!  Form::text('name', null ,['class' => 'form-control'] ) !!}
							</div>
							<div class="col-md-6 form-group">
								{!!  Form::label('username',  __('admin.pages.user_edit.username')) !!}
								{!!  Form::text('username', null ,['class' => 'form-control'] ) !!}
							</div>
							<div class="col-md-6 form-group">
								{!!  Form::label('email',  __('admin.pages.user_edit.email')) !!}
								{!!  Form::email('email', null ,['class' => 'form-control'] ) !!}
							</div>
							<div class="col-md-6 form-group">
								{!!  Form::label('password', __('admin.pages.user_edit.password')) !!}
								{!!  Form::text('password', null ,['class' => 'form-control'] ) !!}
							</div>
					<div class="col-md-6 form-group">
						{!!  Form::label('admin', __('admin.pages.user_edit.admin') ) !!}
						{!!  Form::checkbox('admin', null); !!}
					</div>
				</div>
			</div>
			<div class="card-footer">
				<div class="row m-1">
					<button type="submit" class="btn btn-primary">
						{{__('admin.pages.user_edit.edit')}}
					</button>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
@endsection


@section('scripts')

@endsection
