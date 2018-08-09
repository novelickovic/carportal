@extends('layouts.user')




@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">My cars</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item ">User</li>
                    <li class="breadcrumb-item active">My cars</li>
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
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header">

                    <div class="pull-right"><a href="{{route('cars.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add new car</a></div>
                    <h3><i class="fa fa-car"></i> My cars for sale</h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Engine</th>
                            <th>Fuel</th>
                            <th>Action</th>

                        </thead>


                        <tbody>
                            @foreach($cars as $car)
                                <td class="align-middle">{!! $car->id !!}</td>
                                <td class="align-middle"><img src="{{$car->photo->name}}" alt="" height="50px"></td>
                                <td class="align-middle">{!! $car->make !!}</td>
                                <td class="align-middle">{!! $car->model !!}</td>
                                <td class="align-middle">{!! $car->year !!}</td>
                                <td class="align-middle">{!! $car->engine !!}</td>
                                <td class="align-middle">{!! $car->fuel !!}</td>
                                <td class="align-middle">
                                    {!! Form::open(['class'=>'form-inline','method'=>'DELETE', 'action'=>['UserCarsController@destroy', $car->id]]) !!}

                                    {{--Preview link--}}
                                    <a href="{{route('cars.show', $car->id)}}" class="btn btn-warning btn-sm mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                    {{--Edit link--}}
                                    <a href="{{route('cars.edit', $car->id)}}" class="btn btn-primary btn-sm mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                    <button class="btn btn-danger btn-sm" value="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    {!! Form::close() !!}


                                </td>






                                @endforeach
                        </tbody>
                    </table>




                </div>
            </div>
        </div>
    </div>




@endsection