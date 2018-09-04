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
                    {!! Form::open(['method'=>'POST', 'action'=>'SearchController@showResults']) !!}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('make', 'Select car make') !!}<br>
                                {!! Form::select('make', [''=>'Choose'] + $makes ,null,['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('model', 'Select car model') !!} <div id="loader"><i class="fa fa-spinner fa-spin"></i></div><br>
                                {!! Form::select('model', [''=>'Choose'] ,null,['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('body', 'Select body type') !!}<br>
                                {!! Form::select('body',[''=>'Choose','Sedan'=>'Sedan','Wagon'=>'Wagon','SUV'=>'SUV','Hatchback'=>'Hatchback','Coupe/Cabriolet'=>'Coupe/Cabriolet','Supercar/Sport'=>'Supercar/Sport', 'Pickup'=>'Pickup'], null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::hidden('min_year',1968) !!}
                            {!! Form::hidden('max_year',2018) !!}
                            {!! Form::hidden('min_mileage',0) !!}
                            {!! Form::hidden('max_mileage',1000000) !!}
                            {!! Form::hidden('min_engine',1) !!}
                            {!! Form::hidden('max_engine',7000) !!}
                            {!! Form::hidden('min_power',1) !!}
                            {!! Form::hidden('max_power',7000) !!}
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-danger btn-block">
                                <i class="fa fa-search"></i> Search
                            </button>

                        </div>
                        <div class="col-md-4 align-self-end"><div class="adv-search"><a href="{{url('/search')}}">ADVANCED SEARCH</a></div></div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <!--   Features Latest car added    -->
    <div class="features-box">
        <div class="container">
            <div class="bot-left mb-2"><h3>Latest cars added</h3></div>

            <div class="card-group">

                @foreach($cars as $car)

                    <div class="card">
                        <a href="{{route('car.show', $car->slug)}}">
                            <figure>
                                <img src="{{$car->photos->first()->name}}" alt="">
                                <div class="price">{{$car->price}} €</div>
                            </figure>
                        </a>

                        <div class="card-body">
                            <div class="card-title"><a href="{{route('car.show', $car->slug)}}">{{$car->make}} {{$car->model}}</a></div>
                            <div class="card-text"> {{$car->year}}, {{$car->mileage}} km, {{$car->body_type}} , {{$car->fuel}} </div>
                        </div>

                    </div>

                    <div class="w-100 d-lg-none mt-4"></div>

                @endforeach


            </div>
        </div>
    </div>


    <!--   Features  red   -->
    <div class="features-box-red">
        <div class="container">

            <div class="bot-left-wh"><h3>News</h3></div>
            <div class="pull-right"><a href="{{url('/news')}}"><button class="btn btn-outline-danger btn-sm"><i class="fa fa-newspaper-o"></i> View all news</button></a></div>
            <div class="card-deck">

                @foreach($news as $new)
                    <div class="card">
                        <a href="{{route('news.show', $new->slug)}}">
                            <div class="img-cont">
                            <img src="{{$new->photo->name}}" alt="" class="img-fluid" height="150px">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="card-title">{{$new->title}}</div>
                            <p>{!! str_limit(strip_tags($new->body), 150, ' ...') !!}</p>

                        </div>
                        <div class="card-footer">
                            <a href="{{route('news.show', $new->slug)}}"><button class="btn btn-dark btn-sm pull-right"><i class="fa fa-arrow-circle-o-right"></i> Read more</button>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>



        </div>
    </div>

    <!--   Features  Search By Brand   -->
    <div class="features-box">
        <div class="container block">
            <h3 class="mb-2">Search cars by popular brand</h3>
            <div class="row">
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/Audi')}}">
                            <img src="{{url('/img/car-logo/Audi-logo.png')}}" alt="Audi" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/Mercedes')}}">
                            <img src="{{url('/img/car-logo/Mercedes-Benz-logo.png')}}" alt="Mercedes" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/Porsche')}}">
                            <img src="{{url('/img/car-logo/Porsche-logo.png')}}" alt="Porsche" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/BMW')}}">
                            <img src="{{url('/img/car-logo/BMW-logo.png')}}" alt="BMW" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/Alfa-Romeo')}}">
                            <img src="{{url('/img/car-logo/Alfa-Romeo-logo.png')}}" alt="Alfa Romeo" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/Fiat')}}">
                            <img src="{{url('/img/car-logo/Fiat-logo.png')}}" alt="Fiat" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/Ford')}}">
                            <img src="{{url('/img/car-logo/Ford-logo.png')}}" alt="Ford" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/Honda')}}">
                            <img src="{{url('/img/car-logo/Honda-logo.png')}}" alt="Honda" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/Opel')}}">
                            <img src="{{url('/img/car-logo/Opel-logo.png')}}" alt="opel" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/Toyota')}}">
                            <img src="{{url('/img/car-logo/Toyota-logo.png')}}" alt="Toyota" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/Volkswagen')}}">
                            <img src="{{url('/img/car-logo/Volkswagen-logo.png')}}" alt="Volkswagen" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="search-brand-box">
                        <div class="item">
                            <a href="{{url('/search/Chevrolet')}}">
                            <img src="{{url('/img/car-logo/Chevrolet-logo.png')}}" alt="Chevrolet" >
                            </a>
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
            <div class="pull-right"><a href="{{route('reviews.show')}}"><button class="btn btn-outline-dark btn-sm"><i class="fa fa-newspaper-o"></i> View all reviews</button></a></div>
            <div class="row">

                @foreach($reviews as $review)
                    <div class="col-md-6">
                        <a href="{{url("/reviews/$review->slug")}}">
                            <div class="review-img">
                                <div class="img-cont">
                                <img src="{{$review->photo->name}}" alt="" >
                                </div>
                                <div class="text"><span>{{$review->title}}</span></div>
                            </div>
                        </a>
                    </div>
                    @endforeach


            </div>
        </div>
    </div>

@endsection



@section('scripts')
    <script src="{{asset('js/custom-front-js.js')}}"></script>


    <script>

        function checkModel() {
            var carmake_id = $('select[name="make"]').val();
            if(carmake_id) {
                $.ajax({
                    url: '/models/get/'+carmake_id,
                    type:"GET",
                    dataType:"json",
                    beforeSend: function(){
                        $('#loader').css("visibility", "visible");
                    },

                    success:function(data) {
                        $('select[name="model"]').empty();

                        $('select[name="model"]').append('<option value="">Choose</option>');

                        $.each(data, function(key, value){

                            $('select[name="model"]').append('<option value="'+ value +'">' + value + '</option>');

                        });
                    },
                    complete: function(){
                        $('#loader').css("visibility", "hidden");
                    }
                });
            }
        }


        $(document).ready(function() {

            $('select[name="make"]').on('change', function(){
                var carmake_id = $('select[name="make"]').val();
                if (carmake_id === "") {
                    $('select[name="model"]').empty();
                    $('select[name="model"]').append('<option value="">Choose</option>');

                }


                checkModel();

            });
//
//
//        });

        });
    </script>
    @endsection