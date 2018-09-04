@extends('layouts.user')




@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">My profile</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item ">User</li>
                    <li class="breadcrumb-item active">My profile</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

    @if(!$user->phone)
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger">
                    <h4 class="alert-heading">Please finish your registration in <a href="{{route('profile.index')}}">My Profile</a>  section</h4>
                </div>
            </div>
        </div>
    @endif


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
                <div class="card-header"><h3><i class="fa fa-image"></i> Picture</h3></div>
                <div class="card-body">

                    @if($user->photo)

                        <img src="{{$user->photo->name}}" alt="{!! $user->name !!}" class="img-fluid">

                    @else
                        <h4>You dont have a picture</h4>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-sm-7">
            <div class="card mb-3">
                <div class="card-header"><h3><i class="fa fa-user"></i> My profile</h3></div>
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
                    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UserProfilesController@update', $user->id], 'files'=>true]) !!}

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
                        {!! Form::label('address', 'Address')!!}
                        {!! Form::text('address',  null,  ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('city', 'City')!!}
                        {!! Form::text('city', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('zip', 'Zip')!!}
                        {!! Form::text('zip', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('state', 'State')!!}
                        {!! Form::text('state', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone', 'Telephone number')!!}
                        {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('photo_id', 'Profile image')!!}<br>
                        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group">
                        {!! Form::hidden('created_by', Auth::user()->id) !!}

                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-refresh"></i> Update informations</button>

                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>




@endsection