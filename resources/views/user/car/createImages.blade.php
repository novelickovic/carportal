@extends('layouts.user')

@section('custom_css')
    <link href="{{asset('css/dropzone.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Add new car</h1>
                <ol class="breadcrumb float-right hidden-mobile">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item">Add new car</li>
                    <li class="breadcrumb-item active">Add images</li>
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
                    Attach only images | Max 6 images | Max File Size : 2Mb
                </div>
                <div class="card-body mt-3">

                    {!! Form::open(['id'=>'myAwesomeDropzone','method'=>'POST', 'action'=>'UserCarsController@storeImages', 'class'=>'dropzone', 'files'=>true]) !!}

                    {!! Form::hidden('car_id', $car_id) !!}
                    {!! Form::hidden('created_by', Auth::user()->id) !!}

                    {!! Form::close() !!}

                </div>
                <div class="card-footer">
                    <a href="{{route('cars.index')}}" class="btn btn-lg btn-primary pull rounded-right"><i class="fa fa-save"></i> Save and publish</a>
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
            maxFiles: 6,
            acceptedFiles : "image/*",



            accept: function(file, done) {

                done()
            }
        };

    </script>


@endsection