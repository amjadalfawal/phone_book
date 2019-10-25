@extends('agency.master')
@php
use App\Services\PolicyService;
    
@endphp

@section('title' , __('agent.pages.policy_details.title'))

@section('styles')
<style type="text/css">
    .action-btn {
        float: right
    }

    .details-div {
        padding: 0.6em 4em;
    }

    .custom-form-title {
        color: #00000099 !important;
        font-size: 0.9rem !important;
        font-weight: 400 !important;
        background-color: #3f6ad818 !important;
    }

    .custom-form-value {
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        background-color: #3f6ad811 !important;
    }

    .custom-div-right-border {
        border-right: 1px solid #e0e0e055 !important;
    }

    .custom-hr {
        border: 1px solid #e0e0e055 !important;
        width: 90% !important;
        flex: none !important;
    }

    .custom-wdiget,
    .widget-chart {
        padding-left: 3rem !important;
    }

    .custom-bg-warning {
        background-color: #fb860e !important;
    }

    .custom-bg-success {
        background-color: #1f6dfb !important;
    }

    .custom-bg-danger {
        background-color: #fb1f1f !important;
    }

    @media only screen and (max-width: 576px) {

        .custom-form-title,
        .custom-form-value,
        .custom-widget,
        .icon-wrapper,
        .widget-subheading,
        .widget-numbers {
            flex: none !important;
            text-align: center !important;
        }

        .custom-widget {
            flex-direction: column !important;
            padding-left: 1rem !important;
            text-align: center !important;
        }

    }

    .widget-chart .widget-numbers {
        font-size: 1.18rem !important;
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
            <div>{{__('agent.pages.policy_details.policy_details')}}

            </div>
        </div>
    </div>
</div>
@endsection

@section('main')
<div class="main-card mb-3 card">
    <div class="card-header">
        {{__('agent.pages.policy_details.policy_information')}}
    </div>
    <div class="card-body">
        <div class="row">
            <div
                class="custom-widget col-lg-4 col-md-4 col-sm-6 col-12 card no-shadow rm-border bg-transparent widget-chart  text-left">
                <div class="icon-wrapper rounded-circle">
                    <div class="icon-wrapper-bg opacity-9 bg-warning"></div>
                    <i class="pe-7s-cash text-white"></i>
                </div>
                <div class="widget-chart-content">
                    <div class="widget-subheading">{{__('agent.pages.policy_details.price')}}</div>
                    <div class="widget-numbers"><span>${{ $policy->price }}</span></div>
                </div>
            </div>
            <div
                class="custom-widget col-lg-4 col-md-4 col-sm-6 col-12 card no-shadow rm-border bg-transparent widget-chart  text-left">
                <div class="icon-wrapper rounded-circle">
                    <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                    <i class="pe-7s-plane text-white"></i>
                </div>
                <div class="widget-chart-content">
                    <div class="widget-subheading">{{__('agent.pages.policy_details.origin_city')}}</div>
                    <div class="widget-numbers"><span>{{ $policy->originCity->{'name_' . App::getLocale()} }}</span>
                    </div>
                </div>
            </div>
            <div
                class="custom-widget col-lg-4 col-md-4 col-sm-6 col-12 card no-shadow rm-border bg-transparent widget-chart  text-left">
                <div class="icon-wrapper rounded-circle">
                    <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                    <i class="pe-7s-anchor text-white"></i>
                </div>
                <div class="widget-chart-content">
                    <div class="widget-subheading">{{__('agent.pages.policy_details.destination_city')}}</div>
                    <div class="widget-numbers">
                        <span>{{ $policy->destinationCity->{'name_' . App::getLocale()} }}</span></div>
                </div>
            </div>

            <hr class='col-12 custom-hr'>

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 details-div custom-form-title">
                <strong>{{__('agent.pages.policy_details.agent')}}</strong></div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-12 details-div custom-form-value">
                <a>{{ $policy->agent->{'name_' . App::getLocale()} }}</a>
            </div>
            <hr class='col-12 custom-hr'>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 details-div custom-form-title">
                <strong>{{__('agent.pages.policy_details.id')}}</strong></div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-12 details-div custom-form-value">{{ $policy->id }}</div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 details-div custom-form-title">
                <strong>{{__('agent.pages.policy_details.passport_id')}}</strong></div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-12 details-div custom-form-value">{{ $policy->passport_id }}
            </div>
            <hr class='col-12 custom-hr'>

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 details-div custom-form-title">
                <strong>{{__('agent.pages.policy_details.first_name')}}</strong>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-12 details-div custom-form-value">{{ $policy->first_name }}</div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 details-div custom-form-title">
                <strong>{{__('agent.pages.policy_details.father_name')}}</strong>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-12 details-div custom-form-value">{{ $policy->father_name }}
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 details-div custom-form-title">
                <strong>{{__('agent.pages.policy_details.last_name')}}</strong>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-12 details-div custom-form-value">{{ $policy->last_name }}</div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 details-div custom-form-title">
                <strong>{{__('agent.pages.policy_details.owner_age')}}</strong>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-12 details-div custom-form-value">{{ $policy->owner_age }}</div>

            <hr class='col-12 custom-hr'>

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 details-div custom-form-title">
                <strong>{{__('agent.pages.policy_details.travel_date')}}</strong>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-12 details-div custom-form-value">{{ $policy->travel_date }}
            </div>
            {{--  --}}
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 details-div custom-form-title">
                <strong>{{__('agent.pages.policy_details.come_date')}}</strong>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-12 details-div custom-form-value">{{ $policy->come_date }}</div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 details-div custom-form-title">
                <strong>{{__('agent.pages.policy_details.creation_date')}}</strong>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-12 details-div custom-form-value">
                {{ $policy->creation_date }}</div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 details-div custom-form-title">
                <strong>{{__('agent.pages.policy_details.expiration_date')}}</strong>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-12 details-div custom-form-value">
                {{ $policy->expiration_date }}</div>
                <div class=" mt-2 text-center col-lg-12 col-md-12 col-sm-12 col-12 details-div custom-form-value">
                    {!! PolicyService::BarcodeGenrate($policy->id) !!}</div>
        </div>
        <div class="card-footer">
            <div class="btn-actions-pane-right text-capitalize">
                <a href="{{route('agent.policies')}}">
                    <button class="btn btn-lg btn-primary">
                        {{__('agent.pages.policy_details.back')}}
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection



@section('scripts')
<script type="text/javascript">
    $('#policies-table').dataTable();
</script>
@endsection
