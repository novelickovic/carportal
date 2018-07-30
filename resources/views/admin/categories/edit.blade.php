@extends('layouts.admin')

@section('content')




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