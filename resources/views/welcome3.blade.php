@extends('layouts.interface')

@section('custom_css')

    <link href="{{asset('css/custom-front.css')}}" rel="stylesheet" type="text/css" />

    @endsection

@section('main_content')
    <!--    Top Content     -->
    <div class="top-content">
        <div class="container">
            <div class="box">

                <div class="card">
                    <h3 class="mb-2">Looking for a car?</h3>
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('status', 'Select car make') !!}<br>
                                {!! Form::select('status',['0'=>'Choose','1'=>'Audi', '2'=>'BMW','3'=>'Mercedes'], null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('status', 'Select car model') !!}<br>
                                {!! Form::select('status',['0'=>'Choose','1'=>'Some model 1', '2'=>'Some model 2'], null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('status', 'Select year') !!}<br>
                                {!! Form::select('status',['0'=>'Choose','1'=>'2000', '2'=>'2001)'], null, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-danger btn-block">
                                <i class="fa fa-search"></i> Search
                            </button>

                        </div>
                        <div class="col-md-4 align-self-end"><div class="adv-search"><a href="#">ADVANCED SEARCH</a></div></div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <!--   Features Latest car added    -->
    <div class="features-box">
        <div class="container">
            <div class="bot-left mb-2"><h3><span class="red">L</span>atest cars added</h3></div>

            <div class="card-group">

                <div class="card">
                    <figure>
                        <img src="/images/1534154131mercedes6.png" alt="">
                        <div class="price">6000e</div>
                    </figure>

                    <div class="card-body">
                        <div class="card-title"><a href="#">Mazda 323</a></div>
                        <div class="card-text">vfd vds fv sdfvdf</div>
                    </div>

                </div>

                <div class="w-100 d-lg-none mt-4"></div>

                <div class="card">
                    <figure><img src="/images/1534154131mercedes5.jpeg" alt="">
                        <div class="price">6000e</div>
                    </figure>
                    <div class="card-body">
                        <div class="card-title">Mazda 323</div>
                        <div class="card-text">2018, 200.000 km, automatic </div>
                    </div>
                </div>

                <div class="w-100 d-lg-none mt-4"></div>

                <div class="card">
                    <figure><img src="/images/1534154131mercedes5.jpeg" alt="">
                        <div class="price">6000e</div>
                    </figure>
                    <div class="card-body">
                        <div class="card-title">Mazda 323</div>
                        <div class="card-text">vfd vds fv sdfvdf</div>
                    </div>
                </div>
                <div class="w-100 d-lg-none mt-4"></div>

                <div class="card">
                    <figure><img src="/images/1534154131mercedes5.jpeg" alt="">
                        <div class="price">6000e</div>
                    </figure>
                    <div class="card-body">
                        <div class="card-title">Mazda 323</div>
                        <div class="card-text">vfd vds fv sdfvdf</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--   Features  red   -->
    <div class="features-box-red">
        <div class="container">

            <div class="bot-left-wh"><h3>News</h3></div>
            <div class="pull-right"><button class="btn btn-outline-danger btn-sm"><i class="fa fa-newspaper-o"></i> View all news</button></div>
            <div class="card-deck">
                <div class="card">
                    <img src="/images/1534154131mercedes6.png" alt="" class="img-fluid" height="150px">
                    <div class="card-body">
                        <div class="card-title">South Korea to ban some BMW vehicles over engine fires</div>
                        <p>The government wants the cars off the roads until they have been safety checked by BMW.</p>
                        <button class="btn btn-dark btn-sm pull-right"><i class="fa fa-arrow-circle-o-right"></i> Read more</button>
                    </div>
                </div>

                <div class="card">
                    <img src="/images/1534154131mercedes6.png" alt="" class="img-fluid" height="150px">
                    <div class="card-body">
                        <div class="card-title">Tesla 'to be probed by regulators'</div>
                        <p>According to reports, regulators want to question executives at the firm about its privatisation plans.</p>
                        <button class="btn btn-dark btn-sm pull-right">Read more</button>
                    </div>
                </div>

                <div class="card">
                    <img src="/images/1534154131mercedes6.png" alt="" class="img-fluid" height="150px">
                    <div class="card-body">
                        <div class="card-title">Tesla: 'No formal proposal' to go private</div>
                        <p>A special committee is being formed to discuss any plans by founder Elon Musk to take the firm private.</p>
                        <button class="btn btn-dark btn-sm pull-right">Read more</button>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <!--   Features  Search By Brand   -->
    <div class="features-box">
        <div class="container block">
            <h3 class="mb-2">Search cars by brand</h3>
            <div class="row">
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/Audi-logo.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/Mercedes-Benz-logo.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/Porsche-logo.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/BMW-logo.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/Alfa-Romeo-logo.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/Fiat-logo.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/Ford-logo.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/Honda-logo.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/Opel-logo.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/Toyota-logo.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/Volkswagen-logo.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <img src="/img/car-logo/Chevrolet-logo.png" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Features Reviews -->
    <div class="features-box">
        <div class="container">
            <div class="bot-left mb-2">
                <h3>Reviews</h3>
            </div>
            <div class="pull-right"><button class="btn btn-outline-dark btn-sm"><i class="fa fa-newspaper-o"></i> View all reviews</button></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="review-img">
                        <img src="/images/1534154131mercedes6.png" alt="" >
                        <div class="text"><span>New Volkswagen Amarok Dark Label 2018 review</span></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="review-img">
                        <img src="/images/1534154131mercedes6.png" alt="" >
                        <div class="text"><span>New Volkswagen Amarok Dark Label 2018 review</span></div>
                    </div>
                </div>            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('js/custom-front-js.js')}}"></script>
    @endsection