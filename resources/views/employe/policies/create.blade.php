@extends('agency.master')

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
    {!! Form::open(['url' => route('agent.store.policies')] , ['id' => 'create-policy-form']) !!}
    <div class="card-header">
        {{__('agent.pages.policy_create.travler_data')}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 form-group">
                {!! Form::label('passport_id', __('agent.pages.policy_create.passport_id')) !!}
                {!! Form::number('passport_id', null ,['class' => 'form-control','required' => 'required'] ) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('first_name', __('agent.pages.policy_create.first_name'))!!}
                {!! Form::text('first_name', null ,['class' => 'form-control','required' => 'required'] ) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('last_name', __('agent.pages.policy_create.last_name')) !!}
                {!! Form::text('last_name', null ,['class' => 'form-control','required' => 'required'] ) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('father_name', __('agent.pages.policy_create.father_name')) !!}
                {!! Form::text('father_name', null ,['class' => 'form-control','required' => 'required'] ) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('nationality', __('agent.pages.policy_create.nationality')) !!}
                <select name="nationality_id" required id="nationality" class="form-control">
                    <option value=> {{__('agent.pages.policy_create.nationality')}}</option>
                    @foreach($nationalty as $nationalty)
                      <option value="{{$nationalty->id}}">{{ App::getLocale() == 'ar' ? $nationalty->country_arNationality :  $nationalty->country_enNationality}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('owner_age', __('agent.pages.policy_create.birthdate')) !!}
                {!! Form::date('owner_age', null ,['class' => 'form-control datepicker' ,'required' => 'required'] ) !!}
            </div>

        </div>
    </div>
    <div class="card-header">
        {{__('agent.pages.policy_create.travles_data')}}
    </div>


    <div class="card-body">

        <div class="row">

            <div class="col-md-6 form-group">
                {!! Form::label('destination_city', __('agent.pages.policy_create.destination')) !!}
                <select required name="destination_city_id" id="destination_city_id" class="form-control">
                    <option value='1'> {{__('agent.pages.policy_create.destination')}}</option>
                    @foreach($city as $item)
								<option value="{{$item->id}}">{{ App::getLocale() == 'ar' ? $item->name_ar :  $nationalty->name_en}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('travel_date', __('agent.pages.policy_create.travel_date')) !!}
                {!! Form::date('travel_date', null ,['class' => 'form-control datepicker ' ,'required' => 'required'] ) !!}
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('come_date', __('agent.pages.policy_create.come_date')) !!}
                {!! Form::date('come_date', null ,['class' => 'form-control datepicker' ,'required' => 'required'] ) !!}
            </div>

        </div>
    </div>
    <div class="card-footer">
        <div class="row m-1">
            <button type="submit" class="btn btn-primary">
                {{__('admin.pages.user_create.create')}}
            </button>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@endsection


@section('scripts')
<script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });

</script>
@endsection
