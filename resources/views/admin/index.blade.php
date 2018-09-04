@extends('layouts.admin')

@section('custom_css')
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <!-- END CSS for this page -->
@endsection


@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Dashboard</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active ">Dashboard</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card-box noradius noborder bg-default">
                <i class="fa fa-user float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Administrators</h6>
                <h1 class="m-b-20 text-white counter">{{$adminCount}}</h1>
                <span class="text-white"> &nbsp;</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card-box noradius noborder bg-warning">
                <i class="fa fa-users float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Authors</h6>
                <h1 class="m-b-20 text-white counter">{{$authorCount}}</h1>
                <span class="text-white">&nbsp;</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card-box noradius noborder bg-info">
                <i class="fa fa-users float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Users</h6>
                <h1 class="m-b-20 text-white counter">{{$regUserCount}}</h1>
                <span class="text-white">{{$regUserToday}} new users today</span>
            </div>
        </div>


    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fa fa-user"></i> Administrators</h4>
                    All administrators on site
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        @foreach($adminUsers as $admin)

                            <tr>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                            </tr>

                            @endforeach

                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fa fa-user"></i> Authors</h4>
                    Latest 3 added authors
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created at</th>
                        </tr>
                        @foreach($authorUsers as $author)

                            <tr>
                                <td>{{$author->name}}</td>
                                <td>{{$author->email}}</td>
                                <td>{{$author->created_at->diffForHumans()}}</td>
                            </tr>

                        @endforeach


                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fa fa-user"></i> Registred users</h4>
                    Latest 3 registred users
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created at</th>
                        </tr>
                        @foreach($registredUsers as $user)

                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>


    </div>

    <div class="row mt-4">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fa fa-bar-chart-o"></i> Authors</h4>
                    Statistics
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            Total posts
                            <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                            <canvas id="pieChart" width="365" height="365" style="display: block; width: 365px; height: 365px;"></canvas>
                        </div>

                        <div class="col-sm-3">
                            News / Reviews
                            <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                            <canvas id="pieChart2" width="365" height="365" style="display: block; width: 365px; height: 365px;"></canvas>
                        </div>

                        <div class="col-sm-6">
                            Total posts by month
                            <canvas id="lineChart"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fa fa-bar-chart-o"></i> Registred users</h4>
                    Statistics
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card-box noradius noborder bg-success">
                                <i class="fa fa-users float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Total</h6>
                                <h1 class="m-b-20 text-white counter">{{$regUserCount}}</h1>
                                <span class="text-white">registred users</span>
                            </div>
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fa fa-car float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Total</h6>
                                <h1 class="m-b-20 text-white counter">{{$carCount}}</h1>
                                <span class="text-white">cars in listng</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-box noradius noborder bg-success">
                                <i class="fa fa-users float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Today</h6>
                                <h1 class="m-b-20 text-white counter">{{$regUserToday}}</h1>
                                <span class="text-white">registred users</span>
                            </div>
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fa fa-car float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Today</h6>
                                <h1 class="m-b-20 text-white counter">{{$carCountToday}}</h1>
                                <span class="text-white">added cars</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            Total cars added by month
                            <canvas id="lineChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @endsection







@section('scripts')
    <!-- BEGIN Java Script for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
@endsection


@section('scripts_data')
    <script>
        var ctx2 = document.getElementById("pieChart").getContext('2d');
        var pieChart = new Chart(ctx2, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [{{$postsActive}}, {{$postsInActive}}],
                    backgroundColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255,99,132,1)'


                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    "Active",
                    "Inactive"

                ]
            },
            options: {
                responsive: true
            }

        });
        var ctx3 = document.getElementById("pieChart2").getContext('2d');
        var pieChart2 = new Chart(ctx3, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [{{$newsCount}}, {{$reviewsCount}}],
                    backgroundColor: [
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'

                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    "News",
                    "Reviews"

                ]
            },
            options: {
                responsive: true
            }

        });



        var ctx1 = document.getElementById("lineChart").getContext('2d');
        var lineChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                @php
                    $jan=0;
                    $feb=0;
                    $mar=0;
                    $apr=0;
                    $may=0;
                    $jun=0;
                    $jul=0;
                    $aug=0;
                    $sep=0;
                    $oct=0;
                    $nov=0;
                    $dec=0;
                    $data_value="";
                    foreach ($res as $key => $value){
                            switch ($key) {
                            case "Jan" :
                                $jan= count($value);
                                break;
                            case "Feb" :
                            $feb= count($value);
                            break;
                            case "Mar" :
                            $mar= count($value);
                            break;
                            case "Apr" :
                            $apr= count($value);
                            break;
                            case "May" :
                            $may= count($value);
                            break;
                            case "Jun" :
                            $jun= count($value);
                            break;
                            case "Jul" :
                            $jul= count($value);
                            break;
                            case "Aug" :
                            $aug= count($value);
                            break;
                            case "Sep" :
                            $sep= count($value);
                            break;
                            case "Oct" :
                            $oct= count($value);
                            break;
                            case "Nov" :
                            $nov= count($value);
                            break;
                            case "Dec" :
                            $dec= count($value);
                            break;
                            }
                    }

                @endphp


                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: 'All posts',
                    backgroundColor: '#3EB9DC',
                    data: [{!! $jan !!},{!! $feb !!},{!! $mar !!},{!! $apr !!},{!! $may !!},{!! $jun !!},{!! $jul !!},{!! $aug !!},{!! $sep !!},{!! $oct !!},{!! $nov !!},{!! $dec !!},]
                }]

            },
            options: {
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                responsive: true,
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }
            }
        });

        var ctx11 = document.getElementById("lineChart1").getContext('2d');
        var lineChart1 = new Chart(ctx11, {
            type: 'bar',
            data: {
                @php
                    $jan=0;
                    $feb=0;
                    $mar=0;
                    $apr=0;
                    $may=0;
                    $jun=0;
                    $jul=0;
                    $aug=0;
                    $sep=0;
                    $oct=0;
                    $nov=0;
                    $dec=0;
                    $data_value="";
                    foreach ($carsByMonth as $key => $value){
                            switch ($key) {
                            case "Jan" :
                                $jan= count($value);
                                break;
                            case "Feb" :
                            $feb= count($value);
                            break;
                            case "Mar" :
                            $mar= count($value);
                            break;
                            case "Apr" :
                            $apr= count($value);
                            break;
                            case "May" :
                            $may= count($value);
                            break;
                            case "Jun" :
                            $jun= count($value);
                            break;
                            case "Jul" :
                            $jul= count($value);
                            break;
                            case "Aug" :
                            $aug= count($value);
                            break;
                            case "Sep" :
                            $sep= count($value);
                            break;
                            case "Oct" :
                            $oct= count($value);
                            break;
                            case "Nov" :
                            $nov= count($value);
                            break;
                            case "Dec" :
                            $dec= count($value);
                            break;
                            }
                    }

                @endphp

                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: 'All cars',
                    backgroundColor: '#3EB9DC',
                    data: [{!! $jan !!},{!! $feb !!},{!! $mar !!},{!! $apr !!},{!! $may !!},{!! $jun !!},{!! $jul !!},{!! $aug !!},{!! $sep !!},{!! $oct !!},{!! $nov !!},{!! $dec !!},]
                }]

            },
            options: {
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                responsive: true,
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }
            }
        });

    </script>

@endsection