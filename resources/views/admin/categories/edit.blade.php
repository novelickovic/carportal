@extends('layouts.admin')

@section('content')


    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Categories</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item ">Categories</li>
                    <li class="breadcrumb-item active">Edit category</li>
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
        <div class="col-sm-5">
            <div class="card mb-3">
                <div class="card-header"><h3><i class="fa fa-user-plus"></i> Create new category</h3></div>
                <div class="card-body">

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

                    {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Name')!!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>

                </div>
                <div class="card-footer">
                    <div class="form-group">
                        {!! Form::submit('Edit category', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>




@endsection