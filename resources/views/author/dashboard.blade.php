@extends('layouts.author')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Dashboard</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

    @if(session('message'))
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success">
                    <h4 class="alert-heading">{{session('message')}}</h4>
                </div>
            </div>
        </div>
    @endif

    @if(session('message_error'))
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger">
                    <h4 class="alert-heading">{{session('message_error')}}</h4>
                </div>
            </div>
        </div>
    @endif



    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-default">
                <i class="fa fa-file-text-o float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">My Posts</h6>
                <h1 class="m-b-20 text-white counter">{{count($posts)}}</h1>
                <span class="text-white">{{$post_today}} today</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-warning">
                <i class="fa fa-newspaper-o float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">my news</h6>
                <h1 class="m-b-20 text-white counter">{{$news_count}}</h1>
                <span class="text-white">{{$news_today}} today</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-info">
                <i class="fa fa-newspaper-o float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">My Reviews</h6>
                <h1 class="m-b-20 text-white counter">{{$reviews_count}}</h1>
                <span class="text-white">{{$reviews_today}} today</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-danger">
                <i class="fa fa-eye float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Total views</h6>
                <h1 class="m-b-20 text-white counter">
                    @php
                    $count = 0;
                    foreach($posts as $post) {
                        $count = $count + $post->view_count;
                    }
                    echo $count;
                    @endphp
                </h1>
                <span class="text-white">for all posts</span>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="fa fa-bar-chart-o"></i> News</h3>
                </div>

                <div class="card-body">
                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                    <canvas id="pieChart" width="365" height="365" style="display: block; width: 365px; height: 365px;"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated now</div>
            </div><!-- end card-->
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="fa fa-bar-chart-o"></i> Reviews</h3>
                </div>

                <div class="card-body">
                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                    <canvas id="pieChart2" width="365" height="365" style="display: block; width: 365px; height: 365px;"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated now</div>
            </div><!-- end card-->
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="fa fa-line-chart"></i> My posts this year</h3>
                </div>

                <div class="card-body">
                    <canvas id="lineChart"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated now</div>
            </div><!-- end card-->
        </div>


    </div>



@endsection
@section('scripts')
    <script src="{{asset('/js/admin.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    @endsection

@section('scripts_data')
    <script>
        var ctx2 = document.getElementById("pieChart").getContext('2d');
        var pieChart = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [{!! $news_active !!}, {!! $news_inactive !!}],
                    backgroundColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)'

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
                    data: [{!! $reviews_active !!}, {!! $reviews_inactive !!}],
                    backgroundColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)'

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
                    label: 'My posts',
                    backgroundColor: '#3EB9DC',
                    data: [{!! $jan !!},{!! $feb !!},{!! $mar !!},{!! $apr !!},{!! $may !!},{!! $jun !!},{!! $jul !!},{!! $aug !!},{!! $sep !!},{!! $oct !!},{!! $nov !!},{!! $dec !!},]
                }]


//                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
//                datasets: [{
//                    label: 'My posts',
//                    backgroundColor: '#3EB9DC',
//                    data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9]
//                }, {
//                    label: 'All posts',
//                    backgroundColor: '#EBEFF3',
//                    data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
//                }]

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