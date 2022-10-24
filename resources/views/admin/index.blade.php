@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }}
@endsection

{{-- Css --}}
@section('css')

    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/pages/app-user.css') }}">

@endsection

{{-- Menu Active --}}
@section('dashboard')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
        </ol>
    </div>
@endsection


{{-- Content --}}
@section('content')

<section id="dashboard-analytics" class="app-user-view">

    <div class="row match-height">
        <!-- Greetings Card starts -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-congratulations">
                <div class="card-body text-center">
                    {{-- {{ asset('dashboard_assets') }} --}}
                    <img src="{{ asset('dashboard_assets/app-assets/images/elements/decore-left.png') }}" class="congratulations-img-left" alt="card-img-left" />
                    <img src="{{ asset('dashboard_assets/app-assets/images/elements/decore-right.png') }}" class="congratulations-img-right" alt="card-img-right" />
                    <div class="avatar avatar-xl bg-primary shadow">
                        <div class="avatar-content">
                            <i data-feather="award" class="font-large-1"></i>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 class="mb-1 text-white">Welcome {{ Auth::user()->name }}</h1>
                        {{-- <p class="card-text m-auto w-75">
                            You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Greetings Card ends -->
    </div>

    <div class="mt-3">
        <h2 class="text-center">Statistics will commig soon...</h2>
    </div>

    {{-- <div class="row match-height">
        <!-- Subscribers Chart Card starts -->
        <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-primary p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="users" class="font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="font-weight-bolder mt-1">{{ $subs->count() }}</h2>
                    <p class="card-text">Subscribers Gained</p>
                </div>
                <div id="gained-chart"></div>
            </div>
        </div>
        <!-- Subscribers Chart Card ends -->

        <!-- Orders Chart Card starts -->
        <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-warning p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="package" class="font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="font-weight-bolder mt-1">38.4K</h2>
                    <p class="card-text">Orders Received</p>
                </div>
                <div id="order-chart"></div>
            </div>
        </div>
        <!-- Orders Chart Card ends -->

        <div class="col-xl-6 col-lg-8 col-md-7">
            <div class="card user-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                            <div class="user-avatar-section">
                                <div class="d-flex justify-content-start">
                                    <img class="img-fluid rounded" src="{{ asset('dashboard_assets/app-assets/images/avatars/7.png') }}" height="104" width="104" alt="User avatar">
                                    <div class="d-flex flex-column ml-1">
                                        <div class="user-info mb-1">
                                            <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                                            <span class="card-text">{{ Auth::user()->email }}</span>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <a href="{{ url('user/profile') }}" class="btn btn-primary waves-effect waves-float waves-light">Edit</a>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center user-total-numbers">
                                <div class="d-flex align-items-center mr-2">
                                    <div class="color-box bg-light-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign text-primary"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                    </div>
                                    <div class="ml-1">
                                        <h5 class="mb-0">23.3k</h5>
                                        <small>Monthly Sales</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="color-box bg-light-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                    </div>
                                    <div class="ml-1">
                                        <h5 class="mb-0">$99.87K</h5>
                                        <small>Annual Profit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                            <div class="user-info-wrapper">
                                <div class="d-flex flex-wrap">
                                    <div class="user-info-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="card-text user-info-title font-weight-bold mb-0">Name</span>
                                    </div>
                                    <p class="card-text mb-0">{{ Auth::user()->name }}</p>
                                </div>
                                <div class="d-flex flex-wrap my-50">
                                    <div class="user-info-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check mr-1"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span class="card-text user-info-title font-weight-bold mb-0">Status</span>
                                    </div>
                                    @if (Auth::user()->email_verified_at)
                                    <p class="card-text mb-0 text-success">Verified</p>
                                    @else
                                    <p class="card-text mb-0 text-warning">Not verfied</p>
                                    @endif
                                    
                                </div>
                                <div class="d-flex flex-wrap my-50">
                                    <div class="user-info-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star mr-1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        <span class="card-text user-info-title font-weight-bold mb-0">Role</span>
                                    </div>
                                    <p class="card-text mb-0">Admin</p>
                                </div>
                                <div class="d-flex flex-wrap my-50">
                                    <div class="user-info-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag mr-1"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                                        <span class="card-text user-info-title font-weight-bold mb-0">Country</span>
                                    </div>
                                    <p class="card-text mb-0">England</p>
                                </div>
                                <div class="d-flex flex-wrap">
                                    <div class="user-info-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone mr-1"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        <span class="card-text user-info-title font-weight-bold mb-0">Contact</span>
                                    </div>
                                    <p class="card-text mb-0">(123) 456-7890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row match-height">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card card-browser-states">
                <div class="card-header">
                    <div>
                        <h4 class="card-title">Browser States</h4>
                        <p class="card-text font-small-2">Al Time</p>
                    </div>
                </div>

                <div class="card-body">
                    <div class="browser-states">
                        <div class="media">
                            <img src="{{ asset('dashboard_assets/app-assets/images/icons/google-chrome.png') }}" class="rounded mr-1" height="30" alt="Google Chrome" />
                            <h6 class="align-self-center mb-0">Google Chrome</h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="font-weight-bold text-body-heading mr-1">{{$browser['chrome']}}%</div>
                            <div id="browser-state-chart-primary"></div>
                        </div>
                    </div>
                    <div class="browser-states">
                        <div class="media">
                            <img src="{{ asset('dashboard_assets/app-assets/images/icons/mozila-firefox.png') }}" class="rounded mr-1" height="30" alt="Mozila Firefox" />
                            <h6 class="align-self-center mb-0">Mozila Firefox</h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="font-weight-bold text-body-heading mr-1">{{$browser['firefox']}}%</div>
                            <div id="browser-state-chart-warning"></div>
                        </div>
                    </div>
                   <div class="browser-states">
                        <div class="media">
                            <img src="{{ asset('dashboard_assets/app-assets/images/icons/apple-safari.png') }}" class="rounded mr-1" height="30" alt="Apple Safari"/>

                            <h6 class="align-self-center mb-0">Apple Safari</h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="font-weight-bold text-body-heading mr-1">{{$browser['safari']}}%</div>
                            <div id="browser-state-chart-secondary"></div>
                        </div>
                    </div>
                    <div class="browser-states">
                        <div class="media">
                            <img src="{{ asset('dashboard_assets/app-assets/images/icons/internet-explorer.png') }}" class="rounded mr-1" height="30" alt="Internet Explorer" />
                            <h6 class="align-self-center mb-0">Internet Explorer</h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="font-weight-bold text-body-heading mr-1">{{$browser['internet']}}%</div>
                            <div id="browser-state-chart-info"></div>
                        </div>
                    </div>

                    <div class="browser-states">
                        <div class="media">
                            <img src="{{ asset('dashboard_assets/app-assets/images/icons/opera.png') }}" class="rounded mr-1" height="30" alt="Internet Explorer" />
                            <h6 class="align-self-center mb-0">Opera</h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="font-weight-bold text-body-heading mr-1">{{$browser['opera']}}%</div>
                            <div id="browser-state-chart-danger"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-6 col-12 example" style="overflow-y:scroll; max-height: 432px !important">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h4 class="card-title">Most Visited Pages</h4>
                        <p class="card-text font-small-2">Al Time</p>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <th>URL</th>
                        <th>Visit Count</th>
                        </thead>
                        <tbody>

                        @foreach($top_pages->take(7) as $item)
                            <tr>
                                <td>
                                    <a href="{{$item->url}}" target="_blank">
                                    {{$item->url}}
                                    </a>
                                </td>
                                <td>{{$item->count}}</td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div> --}}
</section>

@endsection

@section('js')
{{-- <script scr="{{ asset('dashboard_assets/app-assets/js/scripts/pages/app-user-view.js') }}"></script> --}}


{{-- <script>

    var $gainedChart = document.querySelector('#gained-chart');
    var $orderChart = document.querySelector('#order-chart');

    var gainedChartOptions;
    var orderChartOptions;

    var gainedChart;
    var orderChart;


    // Subscribed Gained Chart
  // ----------------------------------

  gainedChartOptions = {
    chart: {
      height: 100,
      type: 'area',
      toolbar: {
        show: false
      },
      sparkline: {
        enabled: true
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0
        }
      }
    },
    colors: [window.colors.solid.primary],
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 2.5
    },
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0.9,
        opacityFrom: 0.7,
        opacityTo: 0.5,
        stops: [0, 80, 100]
      }
    },
    series: [
      {
        name: 'Subscribers',
        data: @json($total),
      }
    ],
    xaxis: {
      labels: {
        show: false
      },
      axisBorder: {
        show: false
      }
    },
    yaxis: [
      {
        y: 0,
        offsetX: 0,
        offsetY: 0,
        padding: { left: 0, right: 0 }
      }
    ],
    tooltip: {
      x: { show: false }
    }
  };
  gainedChart = new ApexCharts($gainedChart, gainedChartOptions);
  gainedChart.render();

  // Order Received Chart
  // ----------------------------------

  orderChartOptions = {
    chart: {
      height: 100,
      type: 'area',
      toolbar: {
        show: false
      },
      sparkline: {
        enabled: true
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0
        }
      }
    },
    colors: [window.colors.solid.warning],
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 2.5
    },
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0.9,
        opacityFrom: 0.7,
        opacityTo: 0.5,
        stops: [0, 80, 100]
      }
    },
    series: [
      {
        name: 'Orders',
        data: [10, 15, 8, 15, 7, 12, 8]
      }
    ],
    xaxis: {
      labels: {
        show: false
      },
      axisBorder: {
        show: false
      }
    },
    yaxis: [
      {
        y: 0,
        offsetX: 0,
        offsetY: 0,
        padding: { left: 0, right: 0 }
      }
    ],
    tooltip: {
      x: { show: false }
    }
  };
  orderChart = new ApexCharts($orderChart, orderChartOptions);
  orderChart.render();

</script> --}}

@endsection