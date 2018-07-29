@extends('layouts.admin')

@section('content')


    <div class="row">
        <div class="col-sm-5">
            <div class="card mb-3">
               <div class="card-header"><h3><i class="fa fa-image"></i> Picture</h3></div>
               <div class="card-body">
                   @if($user->photo)

                       <img src="{{$user->photo->name}}" alt="{!! $user->name !!}" class="img-fluid">

                   @else
                       <h4>User does not have a picture</h4>
                   @endif
               </div>
            </div>
        </div>

        <div class="col-sm-7">
            <div class="card mb-3">
                <div class="card-header"><h3><i class="fa fa-user"></i> Edit user</h3></div>
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

                    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Name')!!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email')!!}
                        {!! Form::email('email', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Password')!!} <br><span class="text-pink">Leave blank if you don't want to change it</span>
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('role_id', 'Role')!!}
                        {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('is_Active', 'Status')!!}
                        {!! Form::select('is_active',[ 0=>'Inactive',1 =>'Active'], null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('photo_id', 'Upload a profile photo ')!!}<br>
                        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group">

                        {!! Form::submit('Edit user', ['class'=>'btn btn-primary pull-right']) !!}
                        <a href="{{route('users.index')}}" class="mr-2 btn btn-danger pull-right">Cancel</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>




@endsection