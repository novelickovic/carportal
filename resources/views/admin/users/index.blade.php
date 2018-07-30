@extends('layouts.admin')

@section('content')



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
                <div class="card-header"><h3><i class="fa fa-user-plus"></i> Create a new user</h3></div>
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

                    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Name')!!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email')!!}
                        {!! Form::email('email', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Password')!!}
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('role_id', 'Role')!!}
                        {!! Form::select('role_id',[''=>'Choose option'] + $roles, null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('is_Active', 'Status')!!}
                        {!! Form::select('is_active',[''=>'Chosse option', 0=>'Inactive',1 =>'Active'], null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('photo_id', 'Upload a profile photo ')!!}<br>
                        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group">
                        {!! Form::submit('Create user', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="card mb-3">
                <div class="card-header"><h3><i class="fa fa-users"></i> All users</h3></div>
                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td><img src="{{$user->photo? $user->photo->name : 'http://via.placeholder.com/100x100'}}" class="rounded-circle" width="50" alt="{!! $user->name !!}"></td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role->name}}</td>
                                    <td>{!! Form::open(['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user]]) !!}
                                        @if($user->is_active == 1)
                                            {!! Form::hidden('is_active', '0') !!}
                                            {!! Form::submit('active', ['class'=>'btn btn-success btn-sm']) !!}
                                        @else
                                            {!! Form::hidden('is_active', '1') !!}
                                            {!! Form::submit('inactive', ['class'=>'btn btn-danger btn-sm']) !!}

                                        @endif

                                        {!! Form::close() !!}
                                    </td>
                                    <td>{!! Form::open(['class'=>'form-inline','method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}

                                            {{--Edit link--}}
                                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-sm mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                            <button class="btn btn-danger btn-sm" value="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>

                    <div class="justify-content-center">{{ $users->links() }}</div>

                </div>
            </div>
        </div>
    </div>




    @endsection