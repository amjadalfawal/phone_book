@extends('agency.master')

@section('title' , __('admin.pages.dashboard.title'))

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
                        <i style='color: #7189bfe8 !important;' class="fa fa-space-shuttle"></i>
				</div>
					<div>{{__('admin.pages.dashboard.dashboard')}}
			    	{{-- <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div> --}}
				</div>
			</div>
		</div>
	</div>
@endsection



@section('main')
	<div class="row">
		<div class="col-md-6 col-lg-4">
	        <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
	            <div class="widget-chat-wrapper-outer">
	                <div class="widget-chart-content">
	                    <div class="widget-title opacity-5 text-uppercase">
	                    	Policies
	                    	<span style="float: right;"><small>this week</small></span>

	                	</div>
	                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
	                        <div class="widget-chart-flex align-items-center">
	                            <div>
	                                <span class="opacity-10 text-success pr-2">
	                                    <i class="fa fa-angle-up"></i>
	                                </span>
	                                {{$policiesData['total']}}
	                                <small class="opacity-5 pl-1">total</small>
	                            </div>
	                            <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
	                                <div class="circle-progress policies-progress circle-progress-gradient-alt-sm d-inline-block">
	                                    <small></small>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <div class="col-md-6 col-lg-4">
	        <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
	            <div class="widget-chat-wrapper-outer">
	                <div class="widget-chart-content">
	                    <div class="widget-title opacity-5 text-uppercase">
	                    	Active Policies
	                    	<span style="float: right;"><small>created this week</small></span>

	                	</div>
	                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
	                        <div class="widget-chart-flex align-items-center">
	                            <div>
	                                <span class="opacity-10 text-success pr-2">
	                                    <i class="fa fa-angle-up"></i>
	                                </span>
	                                {{$active['total']}}
	                                <small class="opacity-5 pl-1">total</small>
	                            </div>
	                            <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
	                                <div class="circle-progress active-progress circle-progress-gradient-alt-sm d-inline-block">
	                                    <small></small>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="col-md-6 col-lg-4">
	        <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-success border-success card">
	            <div class="widget-chat-wrapper-outer">
	                <div class="widget-chart-content">
	                    <div class="widget-title opacity-5 text-uppercase">
	                    	Income
	                    	<span style="float: right;"><small>this week</small></span>
	                	</div>
	                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
	                        <div class="widget-chart-flex align-items-center">
	                            <div>
	                                <span class="opacity-10 text-success pr-2">
	                                    <!-- <i class="fa fa-angle-up"></i> -->
	                                	$
	                                </span>
	                                {{$income['total']}}
	                                <small class="opacity-5 pl-1">total</small>
	                            </div>
	                            <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
	                                <div class="circle-progress income-progress circle-progress-success-sm d-inline-block">
	                                    <small></small>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="main-card mb-3 card">
		<div class="card-header">
			Charts Card
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-6" style="height: 200px">
					Chart 1
				</div>
				<div class="col-md-5" style="height: 200px">
					Chart 2
				</div>
			</div>
		</div>
		<div class="card-footer">
			Footer
		</div>
	</div>
@endsection



@section('scripts')
<script src="/admin_assets/js/vendors/circle-progress.js"></script>
<!-- <script src="/admin_assets/js/scripts-init/circle-progress.js"></script> -->

<script type="text/javascript">

    $('.policies-progress').circleProgress({
        value: {{$policiesData['percentage']}},
        size: 64,
        lineCap: 'round',
        fill: {gradient: ['#007bff', '#16aaff']}
    }).on('circle-animation-progress', function (event, progress, stepValue) {
        $(this).find('small').html('<span>' + stepValue.toFixed(2)*100 + '%<span>');
    });


    $('.active-progress').circleProgress({
        value: {{$active['percentage']}},
        size: 64,
        lineCap: 'round',
        fill: {gradient: ['#007bff', '#16aaff']}
    }).on('circle-animation-progress', function (event, progress, stepValue) {
        $(this).find('small').html('<span>' + stepValue.toFixed(2)*100 + '%<span>');
    });

     $('.income-progress').circleProgress({
        value: {{$income['percentage']}},
        size: 64,
        lineCap: 'round',
        fill: {gradient: ['#007bff', '#16aaff']}
    }).on('circle-animation-progress', function (event, progress, stepValue) {
        $(this).find('small').html('<span>' + stepValue.toFixed(2)*100 + '%<span>');
    });

</script>
@endsection
