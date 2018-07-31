@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Categories</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Categories</li>
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
                <div class="card-header"><h3><i class="fa fa-plus-circle"></i> Create new category</h3></div>
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

                    {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Name')!!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>

                </div>
                <div class="card-footer">
                    <div class="form-group">
                        {!! Form::submit('Create category', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="card mb-3">
                <div class="card-header"><h3><i class="fa fa-list"></i> All categories</h3></div>
                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at->diffForHumans()}}</td>
                                <td>{{$category->updated_at->diffForHumans()}}</td>

                                <td>{!! Form::open(['class'=>'form-inline','method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}

                                    {{--Edit link--}}
                                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary btn-sm mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                    <button class="btn btn-danger btn-sm" value="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>




@endsection