@extends('layouts.interface')

@section('custom_css')
    <link href="{{asset('css/custom-front.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('main_content')
    <div class="search-top">
    </div>

    <div class="cd-breadcrumb">
        <div class="container">
            <span class="cd-breadcrumb-inactive">Home /</span> Search
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-box">
                    <div class="title">Search cars</div>

                    <div class="row">
                        <div class="col-md-9">
                            @if(isset($input))
                            {!! Form::model($input, ['method'=>'POST', 'action'=>'SearchController@showResults']) !!}
                            @else
                                {!! Form::open(['method'=>'POST', 'action'=>'SearchController@showResults']) !!}
                            @endif
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('make', 'Select make') !!}
                                        {!! Form::select('make', [''=>'Choose', 'mercedes'=>'Mercedes','2'=>'BMW'],null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('model', 'Select model') !!}
                                        {!! Form::select('model', [''=>'Choose','C200'=>'C200','C220'=>'C220'],null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('year_from', 'Year ', ['class'=>'label-no-bott']) !!}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                {!! Form::select('min_year', ['0'=>'From', '2000'=>'2000', '2005'=>'2005', '2010'=>'2010'],null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                {!! Form::select('max_year', ['1000000'=>'To', '2000'=>'2000', '2005'=>'2005', '2010'=>'2010'],null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('mileage_from', 'Milege ', ['class'=>'label-no-bott']) !!}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                {!! Form::select('min_mileage', ['0'=>'From', '50000'=>'50.000 km', '100000'=>'100.000 km'],null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                {!! Form::select('max_mileage', ['1000000'=>'To', '100000'=>'100.000 km', '200000'=>'200.000 km'],null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('body', 'Body') !!}
                                        {!! Form::select('body', [''=>'Choose','coupe'=>'Coupe', 'sedan'=>'Sedan'],null,['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('fuel', 'Fuel type') !!}
                                        {!! Form::select('fuel', ['0'=>'Choose','diesel'=>'Diesel','gasoline'=>'Gasoline'],null,['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    {!! Form::label('price_from', 'Price ', ['class'=>'label-no-bott']) !!}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                {!! Form::select('min_price', ['0'=>'From','5000'=>'5.000e','10000'=>'10.000e'],null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                {!! Form::select('max_price', ['1000000'=>'To','5000'=>'5.000e','10000'=>'10.000e'],null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    {!! Form::label('_from', 'Emgine displacement ', ['class'=>'label-no-bott']) !!}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                {!! Form::select('min_engine', ['0'=>'From','1000'=>'1000 ccm','2000'=>'2000ccm'],null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                {!! Form::select('max_engine', ['10000'=>'To','2000'=>'2000ccm' ,'3000'=>'3000ccm'],null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    {!! Form::label('engine_power_from', 'Engine power ', ['class'=>'label-no-bott']) !!}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                {!! Form::select('min_power', ['0'=>'From','100'=>'100 HP','200'=>'200 HP'],null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                {!! Form::select('max_power', ['2000'=>'To','100'=>'100 HP','200'=>'200 HP'],null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 offset-sm-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger btn-block mt-2">
                                            <i class="fa fa-search"></i> Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-md-3">
                            <img src="/img/carsearch.png" alt="" class="img-fluid d-none d-md-block">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="container">


        <div class="row">



                @if(isset($cars))
                    @if(count($cars) == 0)
                        <div class="col-md-12">
                            <div class="search-box">
                                <div class="search-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-info mt-3">
                                                    No results found! Please try another search!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                    <div class="col-md-9">
                    @foreach($cars as $car)

                        <div class="search-box">
                            <div class="search-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="item-image">
                                                <img src="{{$car->photos->first()->name}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="item-desc">
                                                <div class="item-desc-title">
                                                    <div class="item-title">{{$car->make}} {{$car->model}}</div>
                                                    <div class="item-price">{{$car->price}} €</div>
                                                </div>
                                            </div>
                                            <div class="item-information">
                                                {{$car->year}}, {{$car->mileage}} km, {{$car->body_type}} , {{$car->fuel}} <br>
                                                Engine {{$car->engine}} cm3, {{$car->horse_power}} HP, {{$car->transmission}} transmission <br>
                                                {{$car->exterior_color}} color, {{$car->doors}} doors, {{$car->seats}} seats
                                            </div>
                                            <div class="item-info">
                                                <div class="item-info-box"><i class="fa fa-map-marker"></i> {{$car->user->city}}</div>
                                                <div class="item-info-box"><i class="fa fa-clock-o"></i> {{$car->created_at->diffForHumans()}}</div>

                                                <div class="item-cardetails">
                                                    <a href="{{route('car.show', $car->id)}}" class="btn btn-danger">Car details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                    @if(count($cars) !== 0)
                        <div class="col-md-3">
                            <div class="search-box">
                                <img src="/img/carads.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    @endif
                @endif

        </div>
    </div>


        @endsection


        @section('scripts')
            <script src="{{asset('js/custom-front-js.js')}}"></script>




@endsection