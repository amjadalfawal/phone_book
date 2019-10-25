@extends('admin.master')

@section('title' , __('admin.pages.dashboard.title'))

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
    <div class="col-md-6 col-lg-3">
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
                                <div
                                    class="circle-progress policies-progress circle-progress-gradient-alt-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-success border-success card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">
                        Agents
                        <span style="float: right;"><small>this week</small></span>
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <span class="opacity-10 text-success pr-2">
                                    <i class="fa fa-angle-up"></i>
                                </span>
                                {{$agentsData['total']}}
                                <small class="opacity-5 pl-1">total</small>
                            </div>
                            <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                <div class="circle-progress agents-progress circle-progress-success-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
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
                                <div
                                    class="circle-progress active-progress circle-progress-gradient-alt-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
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
<div class="row">
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Policies Creation Chart</h5>
                <div id="income-chart-apex-area"></div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="chartjs-size-monitor"
                    style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <h5 class="card-title">Policies & Destinations Chart</h5>
                <canvas id="destination-pie-chart" width="352" height="176" class="chartjs-render-monitor"
                    style="display: block; width: 352px; height: 176px;"></canvas>
            </div>
        </div>

    </div>
    <div class="col-md-6">

        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Policics Total & Net Income</h5>
                <div id="resources-chart-apex-column"></div>
            </div>
        </div>

        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="chartjs-size-monitor"
                    style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <h5 class="card-title">Policies & Ages Chart</h5>
                <canvas id="ages-doughnut-chart" width="352" height="176" class="chartjs-render-monitor"
                    style="display: block; width: 352px; height: 176px;"></canvas>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content pt-3 pl-3 pb-1">
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
                                    <small class="opacity-5">$</small>
                                    <span>874</span></div>
                            </div>
                        </div>
                    </div>
                    <h6 class="widget-subheading mb-0 opacity-5">sales last month</h6>
                </div>
                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                    <div class="col-md-9">
                        <div id="dashboard-sparklines-1" style="min-height: 100px;">
                            <div id="apexcharts8xtwh98q" class="apexcharts-canvas apexcharts8xtwh98q"
                                style="width: 258px; height: 100px;"><svg id="SvgjsSvg1262" width="258" height="100"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1264" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 0)">
                                        <defs id="SvgjsDefs1263">
                                            <clipPath id="gridRectMask8xtwh98q">
                                                <rect id="SvgjsRect1268" width="261" height="103" x="-1.5" y="-1.5"
                                                    rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask8xtwh98q">
                                                <rect id="SvgjsRect1269" width="266" height="108" x="-4" y="-4" rx="0"
                                                    ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1267" width="1" height="100" x="0" y="0" rx="0" ry="0"
                                            fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1276" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1277" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, 1.875)"></g>
                                        </g>
                                        <g id="SvgjsG1280" class="apexcharts-grid">
                                            <line id="SvgjsLine1282" x1="0" y1="100" x2="258" y2="100"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1281" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                                stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1271" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG1272" class="apexcharts-series series-1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="apexcharts-line-0"
                                                    d="M 5.375 47.58478931140802C 9.1375 47.58478931140802 12.3625 64.02877697841726 16.125 64.02877697841726C 19.8875 64.02877697841726 23.1125 36.27954779033916 26.875 36.27954779033916C 30.6375 36.27954779033916 33.8625 4.419321685508734 37.625 4.419321685508734C 41.3875 4.419321685508734 44.6125 80.47276464542651 48.375 80.47276464542651C 52.1375 80.47276464542651 55.3625 44.50154162384378 59.125 44.50154162384378C 62.8875 44.50154162384378 66.1125 51.69578622816033 69.875 51.69578622816033C 73.6375 51.69578622816033 76.8625 75.33401849948612 80.625 75.33401849948612C 84.3875 75.33401849948612 87.6125 44.50154162384378 91.375 44.50154162384378C 95.1375 44.50154162384378 98.3625 53.751284686536486 102.125 53.751284686536486C 105.8875 53.751284686536486 109.1125 72.25077081192188 112.875 72.25077081192188C 116.6375 72.25077081192188 119.8625 52.723535457348405 123.625 52.723535457348405C 127.3875 52.723535457348405 130.6125 42.44604316546762 134.375 42.44604316546762C 138.1375 42.44604316546762 141.3625 72.25077081192188 145.125 72.25077081192188C 148.8875 72.25077081192188 152.1125 57.8622816032888 155.875 57.8622816032888C 159.6375 57.8622816032888 162.8625 68.13977389516958 166.625 68.13977389516958C 170.3875 68.13977389516958 173.6125 45.52929085303186 177.375 45.52929085303186C 181.1375 45.52929085303186 184.3625 61.973278520041106 188.125 61.973278520041106C 191.8875 61.973278520041106 195.1125 33.19630010277493 198.875 33.19630010277493C 202.6375 33.19630010277493 205.8625 64.02877697841726 209.625 64.02877697841726C 213.3875 64.02877697841726 216.6125 37.30729701952723 220.375 37.30729701952723C 224.1375 37.30729701952723 227.3625 59.917780061664956 231.125 59.917780061664956C 234.8875 59.917780061664956 238.1125 55.80678314491264 241.875 55.80678314491264C 245.6375 55.80678314491264 248.8625 60.94552929085303 252.625 60.94552929085303"
                                                    fill="none" fill-opacity="1" stroke="rgba(58,196,125,0.85)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMask8xtwh98q)"
                                                    pathTo="M 5.375 47.58478931140802C 9.1375 47.58478931140802 12.3625 64.02877697841726 16.125 64.02877697841726C 19.8875 64.02877697841726 23.1125 36.27954779033916 26.875 36.27954779033916C 30.6375 36.27954779033916 33.8625 4.419321685508734 37.625 4.419321685508734C 41.3875 4.419321685508734 44.6125 80.47276464542651 48.375 80.47276464542651C 52.1375 80.47276464542651 55.3625 44.50154162384378 59.125 44.50154162384378C 62.8875 44.50154162384378 66.1125 51.69578622816033 69.875 51.69578622816033C 73.6375 51.69578622816033 76.8625 75.33401849948612 80.625 75.33401849948612C 84.3875 75.33401849948612 87.6125 44.50154162384378 91.375 44.50154162384378C 95.1375 44.50154162384378 98.3625 53.751284686536486 102.125 53.751284686536486C 105.8875 53.751284686536486 109.1125 72.25077081192188 112.875 72.25077081192188C 116.6375 72.25077081192188 119.8625 52.723535457348405 123.625 52.723535457348405C 127.3875 52.723535457348405 130.6125 42.44604316546762 134.375 42.44604316546762C 138.1375 42.44604316546762 141.3625 72.25077081192188 145.125 72.25077081192188C 148.8875 72.25077081192188 152.1125 57.8622816032888 155.875 57.8622816032888C 159.6375 57.8622816032888 162.8625 68.13977389516958 166.625 68.13977389516958C 170.3875 68.13977389516958 173.6125 45.52929085303186 177.375 45.52929085303186C 181.1375 45.52929085303186 184.3625 61.973278520041106 188.125 61.973278520041106C 191.8875 61.973278520041106 195.1125 33.19630010277493 198.875 33.19630010277493C 202.6375 33.19630010277493 205.8625 64.02877697841726 209.625 64.02877697841726C 213.3875 64.02877697841726 216.6125 37.30729701952723 220.375 37.30729701952723C 224.1375 37.30729701952723 227.3625 59.917780061664956 231.125 59.917780061664956C 234.8875 59.917780061664956 238.1125 55.80678314491264 241.875 55.80678314491264C 245.6375 55.80678314491264 248.8625 60.94552929085303 252.625 60.94552929085303"
                                                    pathFrom="M -1 100L -1 100L 16.125 100L 26.875 100L 37.625 100L 48.375 100L 59.125 100L 69.875 100L 80.625 100L 91.375 100L 102.125 100L 112.875 100L 123.625 100L 134.375 100L 145.125 100L 155.875 100L 166.625 100L 177.375 100L 188.125 100L 198.875 100L 209.625 100L 220.375 100L 231.125 100L 241.875 100L 252.625 100">
                                                </path>
                                                <g id="SvgjsG1273" class="apexcharts-series-markers-wrap">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1288" r="0" cx="0" cy="0"
                                                            class="apexcharts-marker wa929tqwj no-pointer-events"
                                                            stroke="#ffffff" fill="#3ac47d" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1274" class="apexcharts-datalabels"></g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1283" x1="0" y1="0" x2="258" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1284" x1="0" y1="0" x2="258" y2="0" stroke-dasharray="0"
                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1285" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1286" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1287" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1278" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)">
                                        <g id="SvgjsG1279" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip light">
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(58, 196, 125);"></span>
                                        <div class="apexcharts-tooltip-text">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 259px; height: 101px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content pt-3 pl-3 pb-1">
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
                                    <small class="opacity-5">$</small>
                                    <span>1283</span></div>
                            </div>
                        </div>
                    </div>
                    <h6 class="widget-subheading mb-0 opacity-5">sales Income</h6>
                </div>
                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                    <div class="col-md-9">
                        <div id="dashboard-sparklines-2" style="min-height: 100px;">
                            <div id="apexchartsvyq92vrq" class="apexcharts-canvas apexchartsvyq92vrq"
                                style="width: 258px; height: 100px;"><svg id="SvgjsSvg1292" width="258" height="100"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1294" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 0)">
                                        <defs id="SvgjsDefs1293">
                                            <clipPath id="gridRectMaskvyq92vrq">
                                                <rect id="SvgjsRect1298" width="261" height="103" x="-1.5" y="-1.5"
                                                    rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskvyq92vrq">
                                                <rect id="SvgjsRect1299" width="266" height="108" x="-4" y="-4" rx="0"
                                                    ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1297" width="1" height="100" x="241.375" y="0" rx="0" ry="0"
                                            fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1306" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1307" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, 1.875)"></g>
                                        </g>
                                        <g id="SvgjsG1310" class="apexcharts-grid">
                                            <line id="SvgjsLine1312" x1="0" y1="100" x2="258" y2="100"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1311" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                                stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1301" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG1302" class="apexcharts-series series-1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="apexcharts-line-0"
                                                    d="M 5.375 52.723535457348405C 9.1375 52.723535457348405 12.3625 60.94552929085303 16.125 60.94552929085303C 19.8875 60.94552929085303 23.1125 59.917780061664956 26.875 59.917780061664956C 30.6375 59.917780061664956 33.8625 36.27954779033916 37.625 36.27954779033916C 41.3875 36.27954779033916 44.6125 33.19630010277493 48.375 33.19630010277493C 52.1375 33.19630010277493 55.3625 42.44604316546762 59.125 42.44604316546762C 62.8875 42.44604316546762 66.1125 55.80678314491264 69.875 55.80678314491264C 73.6375 55.80678314491264 76.8625 44.50154162384378 80.625 44.50154162384378C 84.3875 44.50154162384378 87.6125 64.02877697841726 91.375 64.02877697841726C 95.1375 64.02877697841726 98.3625 4.419321685508734 102.125 4.419321685508734C 105.8875 4.419321685508734 109.1125 61.973278520041106 112.875 61.973278520041106C 116.6375 61.973278520041106 119.8625 53.751284686536486 123.625 53.751284686536486C 127.3875 53.751284686536486 130.6125 37.30729701952723 134.375 37.30729701952723C 138.1375 37.30729701952723 141.3625 80.47276464542651 145.125 80.47276464542651C 148.8875 80.47276464542651 152.1125 72.25077081192188 155.875 72.25077081192188C 159.6375 72.25077081192188 162.8625 57.8622816032888 166.625 57.8622816032888C 170.3875 57.8622816032888 173.6125 64.02877697841726 177.375 64.02877697841726C 181.1375 64.02877697841726 184.3625 68.13977389516958 188.125 68.13977389516958C 191.8875 68.13977389516958 195.1125 47.58478931140802 198.875 47.58478931140802C 202.6375 47.58478931140802 205.8625 72.25077081192188 209.625 72.25077081192188C 213.3875 72.25077081192188 216.6125 45.52929085303186 220.375 45.52929085303186C 224.1375 45.52929085303186 227.3625 44.50154162384378 231.125 44.50154162384378C 234.8875 44.50154162384378 238.1125 75.33401849948612 241.875 75.33401849948612C 245.6375 75.33401849948612 248.8625 51.69578622816033 252.625 51.69578622816033"
                                                    fill="none" fill-opacity="1" stroke="rgba(0,123,255,0.85)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMaskvyq92vrq)"
                                                    pathTo="M 5.375 52.723535457348405C 9.1375 52.723535457348405 12.3625 60.94552929085303 16.125 60.94552929085303C 19.8875 60.94552929085303 23.1125 59.917780061664956 26.875 59.917780061664956C 30.6375 59.917780061664956 33.8625 36.27954779033916 37.625 36.27954779033916C 41.3875 36.27954779033916 44.6125 33.19630010277493 48.375 33.19630010277493C 52.1375 33.19630010277493 55.3625 42.44604316546762 59.125 42.44604316546762C 62.8875 42.44604316546762 66.1125 55.80678314491264 69.875 55.80678314491264C 73.6375 55.80678314491264 76.8625 44.50154162384378 80.625 44.50154162384378C 84.3875 44.50154162384378 87.6125 64.02877697841726 91.375 64.02877697841726C 95.1375 64.02877697841726 98.3625 4.419321685508734 102.125 4.419321685508734C 105.8875 4.419321685508734 109.1125 61.973278520041106 112.875 61.973278520041106C 116.6375 61.973278520041106 119.8625 53.751284686536486 123.625 53.751284686536486C 127.3875 53.751284686536486 130.6125 37.30729701952723 134.375 37.30729701952723C 138.1375 37.30729701952723 141.3625 80.47276464542651 145.125 80.47276464542651C 148.8875 80.47276464542651 152.1125 72.25077081192188 155.875 72.25077081192188C 159.6375 72.25077081192188 162.8625 57.8622816032888 166.625 57.8622816032888C 170.3875 57.8622816032888 173.6125 64.02877697841726 177.375 64.02877697841726C 181.1375 64.02877697841726 184.3625 68.13977389516958 188.125 68.13977389516958C 191.8875 68.13977389516958 195.1125 47.58478931140802 198.875 47.58478931140802C 202.6375 47.58478931140802 205.8625 72.25077081192188 209.625 72.25077081192188C 213.3875 72.25077081192188 216.6125 45.52929085303186 220.375 45.52929085303186C 224.1375 45.52929085303186 227.3625 44.50154162384378 231.125 44.50154162384378C 234.8875 44.50154162384378 238.1125 75.33401849948612 241.875 75.33401849948612C 245.6375 75.33401849948612 248.8625 51.69578622816033 252.625 51.69578622816033"
                                                    pathFrom="M -1 100L -1 100L 16.125 100L 26.875 100L 37.625 100L 48.375 100L 59.125 100L 69.875 100L 80.625 100L 91.375 100L 102.125 100L 112.875 100L 123.625 100L 134.375 100L 145.125 100L 155.875 100L 166.625 100L 177.375 100L 188.125 100L 198.875 100L 209.625 100L 220.375 100L 231.125 100L 241.875 100L 252.625 100">
                                                </path>
                                                <g id="SvgjsG1303" class="apexcharts-series-markers-wrap">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1318" r="0" cx="241.875"
                                                            cy="75.33401849948612"
                                                            class="apexcharts-marker w3qf4cw25 no-pointer-events"
                                                            stroke="#ffffff" fill="#007bff" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1304" class="apexcharts-datalabels"></g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1313" x1="0" y1="0" x2="258" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1314" x1="0" y1="0" x2="258" y2="0" stroke-dasharray="0"
                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1315" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1316" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1317" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1308" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)">
                                        <g id="SvgjsG1309" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip light" style="left: 215.156px; top: 0px;">
                                    <div class="apexcharts-tooltip-series-group active" style="display: flex;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(0, 123, 255); display: none;"></span>
                                        <div class="apexcharts-tooltip-text">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value">24</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 259px; height: 101px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content pt-3 pl-3 pb-1">
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
                                    <small class="opacity-5">$</small>
                                    <span>1286</span></div>
                            </div>
                        </div>
                    </div>
                    <h6 class="widget-subheading mb-0 opacity-5">last month sales</h6>
                </div>
                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                    <div class="col-md-9">
                        <div id="dashboard-sparklines-3" style="min-height: 100px;">
                            <div id="apexchartszl4jrrvsk" class="apexcharts-canvas apexchartszl4jrrvsk"
                                style="width: 258px; height: 100px;"><svg id="SvgjsSvg1322" width="258" height="100"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1324" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 0)">
                                        <defs id="SvgjsDefs1323">
                                            <clipPath id="gridRectMaskzl4jrrvsk">
                                                <rect id="SvgjsRect1328" width="261" height="103" x="-1.5" y="-1.5"
                                                    rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskzl4jrrvsk">
                                                <rect id="SvgjsRect1329" width="266" height="108" x="-4" y="-4" rx="0"
                                                    ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1327" width="1" height="100" x="0" y="0" rx="0" ry="0"
                                            fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1336" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1337" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, 1.875)"></g>
                                        </g>
                                        <g id="SvgjsG1340" class="apexcharts-grid">
                                            <line id="SvgjsLine1342" x1="0" y1="100" x2="258" y2="100"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1341" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                                stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1331" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG1332" class="apexcharts-series series-1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="apexcharts-line-0"
                                                    d="M 5.375 47.58478931140802C 9.1375 47.58478931140802 12.3625 45.52929085303186 16.125 45.52929085303186C 19.8875 45.52929085303186 23.1125 4.419321685508734 26.875 4.419321685508734C 30.6375 4.419321685508734 33.8625 72.25077081192188 37.625 72.25077081192188C 41.3875 72.25077081192188 44.6125 60.94552929085303 48.375 60.94552929085303C 52.1375 60.94552929085303 55.3625 57.8622816032888 59.125 57.8622816032888C 62.8875 57.8622816032888 66.1125 52.723535457348405 69.875 52.723535457348405C 73.6375 52.723535457348405 76.8625 55.80678314491264 80.625 55.80678314491264C 84.3875 55.80678314491264 87.6125 37.30729701952723 91.375 37.30729701952723C 95.1375 37.30729701952723 98.3625 64.02877697841726 102.125 64.02877697841726C 105.8875 64.02877697841726 109.1125 64.02877697841726 112.875 64.02877697841726C 116.6375 64.02877697841726 119.8625 80.47276464542651 123.625 80.47276464542651C 127.3875 80.47276464542651 130.6125 42.44604316546762 134.375 42.44604316546762C 138.1375 42.44604316546762 141.3625 44.50154162384378 145.125 44.50154162384378C 148.8875 44.50154162384378 152.1125 72.25077081192188 155.875 72.25077081192188C 159.6375 72.25077081192188 162.8625 59.917780061664956 166.625 59.917780061664956C 170.3875 59.917780061664956 173.6125 61.973278520041106 177.375 61.973278520041106C 181.1375 61.973278520041106 184.3625 44.50154162384378 188.125 44.50154162384378C 191.8875 44.50154162384378 195.1125 33.19630010277493 198.875 33.19630010277493C 202.6375 33.19630010277493 205.8625 75.33401849948612 209.625 75.33401849948612C 213.3875 75.33401849948612 216.6125 53.751284686536486 220.375 53.751284686536486C 224.1375 53.751284686536486 227.3625 68.13977389516958 231.125 68.13977389516958C 234.8875 68.13977389516958 238.1125 51.69578622816033 241.875 51.69578622816033C 245.6375 51.69578622816033 248.8625 36.27954779033916 252.625 36.27954779033916"
                                                    fill="none" fill-opacity="1" stroke="rgba(247,185,36,0.85)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMaskzl4jrrvsk)"
                                                    pathTo="M 5.375 47.58478931140802C 9.1375 47.58478931140802 12.3625 45.52929085303186 16.125 45.52929085303186C 19.8875 45.52929085303186 23.1125 4.419321685508734 26.875 4.419321685508734C 30.6375 4.419321685508734 33.8625 72.25077081192188 37.625 72.25077081192188C 41.3875 72.25077081192188 44.6125 60.94552929085303 48.375 60.94552929085303C 52.1375 60.94552929085303 55.3625 57.8622816032888 59.125 57.8622816032888C 62.8875 57.8622816032888 66.1125 52.723535457348405 69.875 52.723535457348405C 73.6375 52.723535457348405 76.8625 55.80678314491264 80.625 55.80678314491264C 84.3875 55.80678314491264 87.6125 37.30729701952723 91.375 37.30729701952723C 95.1375 37.30729701952723 98.3625 64.02877697841726 102.125 64.02877697841726C 105.8875 64.02877697841726 109.1125 64.02877697841726 112.875 64.02877697841726C 116.6375 64.02877697841726 119.8625 80.47276464542651 123.625 80.47276464542651C 127.3875 80.47276464542651 130.6125 42.44604316546762 134.375 42.44604316546762C 138.1375 42.44604316546762 141.3625 44.50154162384378 145.125 44.50154162384378C 148.8875 44.50154162384378 152.1125 72.25077081192188 155.875 72.25077081192188C 159.6375 72.25077081192188 162.8625 59.917780061664956 166.625 59.917780061664956C 170.3875 59.917780061664956 173.6125 61.973278520041106 177.375 61.973278520041106C 181.1375 61.973278520041106 184.3625 44.50154162384378 188.125 44.50154162384378C 191.8875 44.50154162384378 195.1125 33.19630010277493 198.875 33.19630010277493C 202.6375 33.19630010277493 205.8625 75.33401849948612 209.625 75.33401849948612C 213.3875 75.33401849948612 216.6125 53.751284686536486 220.375 53.751284686536486C 224.1375 53.751284686536486 227.3625 68.13977389516958 231.125 68.13977389516958C 234.8875 68.13977389516958 238.1125 51.69578622816033 241.875 51.69578622816033C 245.6375 51.69578622816033 248.8625 36.27954779033916 252.625 36.27954779033916"
                                                    pathFrom="M -1 100L -1 100L 16.125 100L 26.875 100L 37.625 100L 48.375 100L 59.125 100L 69.875 100L 80.625 100L 91.375 100L 102.125 100L 112.875 100L 123.625 100L 134.375 100L 145.125 100L 155.875 100L 166.625 100L 177.375 100L 188.125 100L 198.875 100L 209.625 100L 220.375 100L 231.125 100L 241.875 100L 252.625 100">
                                                </path>
                                                <g id="SvgjsG1333" class="apexcharts-series-markers-wrap">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1348" r="0" cx="0" cy="0"
                                                            class="apexcharts-marker wsr2azecs no-pointer-events"
                                                            stroke="#ffffff" fill="#f7b924" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1334" class="apexcharts-datalabels"></g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1343" x1="0" y1="0" x2="258" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1344" x1="0" y1="0" x2="258" y2="0" stroke-dasharray="0"
                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1345" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1346" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1347" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1338" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)">
                                        <g id="SvgjsG1339" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip light">
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(247, 185, 36);"></span>
                                        <div class="apexcharts-tooltip-text">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 259px; height: 101px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content pt-3 pl-3 pb-1">
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
                                    <small class="opacity-5">$</small>
                                    <span>564</span></div>
                            </div>
                        </div>
                    </div>
                    <h6 class="widget-subheading mb-0 opacity-5">total revenue</h6>
                </div>
                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                    <div class="col-md-9">
                        <div id="dashboard-sparklines-4" style="min-height: 100px;">
                            <div id="apexchartslnpvgrmn" class="apexcharts-canvas apexchartslnpvgrmn"
                                style="width: 258px; height: 100px;"><svg id="SvgjsSvg1352" width="258" height="100"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1354" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 0)">
                                        <defs id="SvgjsDefs1353">
                                            <clipPath id="gridRectMasklnpvgrmn">
                                                <rect id="SvgjsRect1358" width="261" height="103" x="-1.5" y="-1.5"
                                                    rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMasklnpvgrmn">
                                                <rect id="SvgjsRect1359" width="266" height="108" x="-4" y="-4" rx="0"
                                                    ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1357" width="1" height="100" x="0" y="0" rx="0" ry="0"
                                            fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1366" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1367" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, 1.875)"></g>
                                        </g>
                                        <g id="SvgjsG1370" class="apexcharts-grid">
                                            <line id="SvgjsLine1372" x1="0" y1="100" x2="258" y2="100"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1371" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                                stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1361" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG1362" class="apexcharts-series series-1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="apexcharts-line-0"
                                                    d="M 5.375 72.25077081192188C 9.1375 72.25077081192188 12.3625 33.19630010277493 16.125 33.19630010277493C 19.8875 33.19630010277493 23.1125 80.47276464542651 26.875 80.47276464542651C 30.6375 80.47276464542651 33.8625 61.973278520041106 37.625 61.973278520041106C 41.3875 61.973278520041106 44.6125 42.44604316546762 48.375 42.44604316546762C 52.1375 42.44604316546762 55.3625 68.13977389516958 59.125 68.13977389516958C 62.8875 68.13977389516958 66.1125 52.723535457348405 69.875 52.723535457348405C 73.6375 52.723535457348405 76.8625 72.25077081192188 80.625 72.25077081192188C 84.3875 72.25077081192188 87.6125 4.419321685508734 91.375 4.419321685508734C 95.1375 4.419321685508734 98.3625 44.50154162384378 102.125 44.50154162384378C 105.8875 44.50154162384378 109.1125 47.58478931140802 112.875 47.58478931140802C 116.6375 47.58478931140802 119.8625 55.80678314491264 123.625 55.80678314491264C 127.3875 55.80678314491264 130.6125 64.02877697841726 134.375 64.02877697841726C 138.1375 64.02877697841726 141.3625 37.30729701952723 145.125 37.30729701952723C 148.8875 37.30729701952723 152.1125 51.69578622816033 155.875 51.69578622816033C 159.6375 51.69578622816033 162.8625 64.02877697841726 166.625 64.02877697841726C 170.3875 64.02877697841726 173.6125 59.917780061664956 177.375 59.917780061664956C 181.1375 59.917780061664956 184.3625 36.27954779033916 188.125 36.27954779033916C 191.8875 36.27954779033916 195.1125 75.33401849948612 198.875 75.33401849948612C 202.6375 75.33401849948612 205.8625 44.50154162384378 209.625 44.50154162384378C 213.3875 44.50154162384378 216.6125 53.751284686536486 220.375 53.751284686536486C 224.1375 53.751284686536486 227.3625 60.94552929085303 231.125 60.94552929085303C 234.8875 60.94552929085303 238.1125 45.52929085303186 241.875 45.52929085303186C 245.6375 45.52929085303186 248.8625 57.8622816032888 252.625 57.8622816032888"
                                                    fill="none" fill-opacity="1" stroke="rgba(217,37,80,0.85)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMasklnpvgrmn)"
                                                    pathTo="M 5.375 72.25077081192188C 9.1375 72.25077081192188 12.3625 33.19630010277493 16.125 33.19630010277493C 19.8875 33.19630010277493 23.1125 80.47276464542651 26.875 80.47276464542651C 30.6375 80.47276464542651 33.8625 61.973278520041106 37.625 61.973278520041106C 41.3875 61.973278520041106 44.6125 42.44604316546762 48.375 42.44604316546762C 52.1375 42.44604316546762 55.3625 68.13977389516958 59.125 68.13977389516958C 62.8875 68.13977389516958 66.1125 52.723535457348405 69.875 52.723535457348405C 73.6375 52.723535457348405 76.8625 72.25077081192188 80.625 72.25077081192188C 84.3875 72.25077081192188 87.6125 4.419321685508734 91.375 4.419321685508734C 95.1375 4.419321685508734 98.3625 44.50154162384378 102.125 44.50154162384378C 105.8875 44.50154162384378 109.1125 47.58478931140802 112.875 47.58478931140802C 116.6375 47.58478931140802 119.8625 55.80678314491264 123.625 55.80678314491264C 127.3875 55.80678314491264 130.6125 64.02877697841726 134.375 64.02877697841726C 138.1375 64.02877697841726 141.3625 37.30729701952723 145.125 37.30729701952723C 148.8875 37.30729701952723 152.1125 51.69578622816033 155.875 51.69578622816033C 159.6375 51.69578622816033 162.8625 64.02877697841726 166.625 64.02877697841726C 170.3875 64.02877697841726 173.6125 59.917780061664956 177.375 59.917780061664956C 181.1375 59.917780061664956 184.3625 36.27954779033916 188.125 36.27954779033916C 191.8875 36.27954779033916 195.1125 75.33401849948612 198.875 75.33401849948612C 202.6375 75.33401849948612 205.8625 44.50154162384378 209.625 44.50154162384378C 213.3875 44.50154162384378 216.6125 53.751284686536486 220.375 53.751284686536486C 224.1375 53.751284686536486 227.3625 60.94552929085303 231.125 60.94552929085303C 234.8875 60.94552929085303 238.1125 45.52929085303186 241.875 45.52929085303186C 245.6375 45.52929085303186 248.8625 57.8622816032888 252.625 57.8622816032888"
                                                    pathFrom="M -1 100L -1 100L 16.125 100L 26.875 100L 37.625 100L 48.375 100L 59.125 100L 69.875 100L 80.625 100L 91.375 100L 102.125 100L 112.875 100L 123.625 100L 134.375 100L 145.125 100L 155.875 100L 166.625 100L 177.375 100L 188.125 100L 198.875 100L 209.625 100L 220.375 100L 231.125 100L 241.875 100L 252.625 100">
                                                </path>
                                                <g id="SvgjsG1363" class="apexcharts-series-markers-wrap">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1378" r="0" cx="0" cy="0"
                                                            class="apexcharts-marker wah7hrvz9 no-pointer-events"
                                                            stroke="#ffffff" fill="#d92550" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1364" class="apexcharts-datalabels"></g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1373" x1="0" y1="0" x2="258" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1374" x1="0" y1="0" x2="258" y2="0" stroke-dasharray="0"
                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1375" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1376" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1377" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1368" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)">
                                        <g id="SvgjsG1369" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip light">
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(217, 37, 80);"></span>
                                        <div class="apexcharts-tooltip-text">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 259px; height: 101px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="min-width: 100% !important;" class="mb-3 card">
        <div class="card-header">
            {{ __('admin.pages.policies_index.manage_policies')}}
        </div>
        <div class="card-body">
            <div class="col-12">
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
                            <th>{{ __('admin.pages.policies_index.agent')}}</th>
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

</div>
@endsection



@section('scripts')
<script src="/admin_assets/js/vendors/circle-progress.js"></script>
<!-- <script src="/admin_assets/js/scripts-init/circle-progress.js"></script> -->
<script type="text/javascript">
    $(document).ready(() => {

	        $('#policies-table').DataTable({
				dom: 'Bfrtip',
				responsive: true,
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
                scrollX: false,
	           	ajax: {
	           		method: 'POST',
			        url: '{{route('admin.policies')}}',
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
					{ data: 'agent.name_{{App::getLocale()}}', orderable: false,},
					{ data: 'origin_city.name_{{App::getLocale()}}',orderable: false },
					{ data: 'destination_city.name_{{App::getLocale()}}', orderable: false,},
			        {
			        	data: null,
                        orderable: false,
			        	render: function (data , type , row) {
			        		return `
			        			<a href="/admin/policies/${row.id}">
		        					<button class="m-1 btn btn-primary action-btn">{{__('admin.pages.policies_index.show')}}</button>
								</a>
			        		`;
			        	}
			        } // override renderer
			    ]
	        });
		});

</script>
<script type="text/javascript">
    $('.policies-progress').circleProgress({
        value: {{$policiesData['percentage']}},
        size: 64,
        lineCap: 'round',
        fill: {gradient: ['#007bff', '#16aaff']}
    }).on('circle-animation-progress', function (event, progress, stepValue) {
        $(this).find('small').html('<span>' + stepValue.toFixed(2)*100 + '%<span>');
    });

    $('.agents-progress').circleProgress({
        value: {{$agentsData['percentage']}},
        size: 64,
        lineCap: 'round',
        fill: {color: '#d92550'}

    }).on('circle-animation-progress', function (event, progress, stepValue) {
        $(this).find('small').html('<span>' + stepValue.toFixed(2)*100 + '% <span>');
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

// Charts Scripts
<script>
    var incomeChartApexAreaOptions = {
    chart: {
        height: 350,
        type: 'area',
        zoom: {
            enabled: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    series: [{
        name: "Income",
        data: series.monthDataSeries1.prices
    }],
    title: {
        text: 'Fundamental Analysis of Stocks',
        align: 'left'
    },
    subtitle: {
        text: 'Price Movements',
        align: 'left'
    },
    labels: series.monthDataSeries1.dates,
    xaxis: {
        type: 'datetime'
    },
    yaxis: {
        opposite: true
    },
    legend: {
        horizontalAlign: 'left'
    }
};


var resourcesChartApexColumnOptions = {
    chart: {
        height: 350,
        type: 'bar',
    },
    plotOptions: {
        bar: {
            horizontal: false,
            endingShape: 'rounded',
            columnWidth: '55%',
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Net Profit',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
    }, {
        name: 'Revenue',
        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
    }, {
        name: 'Free Cash Flow',
        data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
    }],
    xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
    },
    yaxis: {
        title: {
            text: '$ (thousands)'
        }
    },
    fill: {
        opacity: 1

    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands";
            }
        }
    }
};

var destenationPieChartOptions = {
    type: 'pie',
    data: {
        datasets: [{
            data: [
                @php
                    foreach(\App\Services\StatisticsService::getDestinationChartData() as $destination){
                        echo $destination.',';
                    }
                @endphp
            ],
            backgroundColor: [
                window.chartColors.red,
                window.chartColors.orange,
                window.chartColors.yellow,
                window.chartColors.green,
                window.chartColors.blue,
                window.chartColors.grey,
                        ],
            label: 'Destination Dataset'
        }],
        labels: [
            @php
                foreach(\App\Services\StatisticsService::getDestinationChartLabels() as $lable){
                    echo '"'.$lable.'",';
                }
            @endphp
        ]
    },
    options: {
        responsive: true
    }
};


var agesDoughnutChartOptions = {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [
                @php
                    foreach(\App\Services\StatisticsService::getAgesChartData() as $age){
                        echo $age.',';
                    }
                @endphp
            ],
            backgroundColor: [
                window.chartColors.red,
                window.chartColors.orange,
                window.chartColors.yellow,
                window.chartColors.green,
                window.chartColors.blue,
            ],
            label: 'Ages Dataset'
        }],
        labels: [
            @php
                foreach(\App\Services\StatisticsService::getAgesChartLabels() as $age){
                    echo '"'.$age.'",';
                }
            @endphp
        ]
    },
    options: {
        responsive: true,
        legend: {
            position: 'top',
        },
        title: {
            display: false,
            text: 'Chart.js Doughnut Chart'
        },
        animation: {
            animateScale: true,
            animateRotate: true
        }
    }
};



$(document).ready(function() {
    setTimeout(function () {
        if (document.getElementById('income-chart-apex-area')) {
            var incomeChartApexArea = new ApexCharts(
                document.querySelector("#income-chart-apex-area"),
                incomeChartApexAreaOptions
            );
            incomeChartApexArea.render();
        }
        if (document.getElementById('resources-chart-apex-column')) {
            var resourcesChartApexColumn = new ApexCharts(
                document.querySelector("#resources-chart-apex-column"),
                resourcesChartApexColumnOptions
            );
            resourcesChartApexColumn.render();
        }

        if (document.getElementById('destination-pie-chart')) {
            var ctx2 = document.getElementById('destination-pie-chart').getContext('2d');
            window.myPie = new Chart(ctx2, destenationPieChartOptions);
        }

        if (document.getElementById('ages-doughnut-chart')) {
            var ctx3 = document.getElementById('ages-doughnut-chart').getContext('2d');
            window.myDoughnut = new Chart(ctx3, agesDoughnutChartOptions);
        }

    }, 1000);
});
</script>
@endsection
