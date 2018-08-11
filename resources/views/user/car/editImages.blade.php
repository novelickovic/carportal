@if($car->user_id !== Auth::user()->id)
    <script>
        window.location = "/user/cars";</script>
    @endif

@extends('layouts.user')

@section('custom_css')
    <link href="{{asset('css/dropzone.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Edit car information</h1>
                <ol class="breadcrumb float-right hidden-mobile">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item">Edit</li>
                    <li class="breadcrumb-item active">Edit images</li>
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


    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Currrently attached images</h3>
                </div>
                <div class="card-body">
                    <div class="card-group">
                        @php
                        $count = count($car->photos);
                        @endphp


                        @foreach($car->photos as $photo)
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{$photo->name}}" alt="" class="img-fluid mb-3"><br>
                                </div>
                                <div class="card-footer">
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['UserCarsController@customDelete', $photo->id]]) !!}

                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete this image</button>

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-sm-12">

            {{--Displaying errors--}}
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


                <div class="card">
                    <div class="card-header">
                        <h3>Add photos</h3>
                        Attach only images | Max 6 images |
                    </div>
                    <div class="card-body mt-3">

                        {!! Form::open(['id'=>'myAwesomeDropzone','method'=>'POST', 'action'=>'UserCarsController@storeImages', 'class'=>'dropzone', 'files'=>true]) !!}

                        {!! Form::hidden('car_id', $car->id) !!}
                        {!! Form::hidden('created_by', Auth::user()->id) !!}

                        {!! Form::close() !!}




                    </div>
                    <div class="card-footer">
                        <a href="{{route('cars.index')}}" class="btn btn-lg btn-success pull-right rounded-right mr-2"><i class="fa fa-check"></i> Finish</a>
                        <a href="{{route('cars.edit.images', $car->id)}}" class="btn btn-lg btn-primary pull-right rounded-right mr-2"><i class="fa fa-save"></i> Save changes</a>

                    </div>
                </div>


        </div>
    </div>












@endsection


@section('scripts')
    <script src="{{asset('js/dropzone.js')}}"></script>

@endsection

@section('scripts_data')
    <script>
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            maxFiles: {{6 - $count}},
            acceptedFiles : "image/*",
            addRemoveLinks : true,



            accept: function(file, done) {

                done()
            }
        };

    </script>


@endsection