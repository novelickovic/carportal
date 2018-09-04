@extends('layouts.user')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">User</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

    @if(!Auth::user()->phone)
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger">
                    <div class="alert-heading">Please finish your registration in <a href="{{route('profile.index')}}">My Profile</a>  section</div>
                </div>
            </div>
        </div>
    @endif

    @if(session('message'))
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-success">
                        <div class="alert-heading">{{session('message')}}</div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(session('message_error'))
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-danger">
                        <div class="alert-heading">{{session('message_error')}}</div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($cars)>=1)
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-info">
                        <div class="alert-heading">
                            Max car you can add in listing is 1. You currently have {{count($cars)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="container-fluid">
        <div class="card-deck">

            <div class="card">
                <div class="card-header"><h3><i class="fa fa-user"></i> My Information</h3></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            @if($user->photo)
                                <img src="{{$user->photo->name}}" alt="profile picture" class="img-fluid">
                                @else
                            You don't have a picture
                                @endif
                        </div>
                        <div class="col-sm-6">
                            <div class="profile-info">Name</div>  <strong>{{$user->name}}</strong><br>
                            <div class="profile-info">Email</div>  <strong>{{$user->email}}</strong><br>
                            <div class="profile-info">Address</div>  <strong>{{$user->address}}</strong><br>
                            <div class="profile-info">City</div> <strong>{{$user->city}}</strong><br>
                            <div class="profile-info">Zip</div>  <strong>{{$user->zip}}</strong><br>
                            <div class="profile-info">State</div> <strong>{{$user->state}}</strong><br>
                            <div class="profile-info">Phone</div>  <strong>{{$user->phone}}</strong><br><br><br>
                            <div class="profile-info">Profile created </div>{{$user->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
                </div>
            <div class="card">
                <div class="card-header"><h3><i class="fa fa-car"></i> My cars</h3></div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 ">
                            <div class="card-box noradius noborder bg-default">
                                <i class="fa fa-car float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Cars in listing</h6>
                                <h1 class="m-b-20 text-white counter">{{count($cars)}}</h1>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fa fa-bar-chart float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Total views</h6>
                                <h1 class="m-b-20 text-white counter">
                                    @php
                                    $count =0;
                                    foreach ($cars as $car) {
                                     $count = $count + $car->view_count;
                                    }
                                    echo $count;
                                    @endphp

                                </h1>
                            </div>
                        </div>

                        <div class="col-md-12">
                             <div class="container">


                                 @if(count($cars) >=1)
                                     <table class="table table-hover">
                                         <thead>
                                         <tr>
                                             <th>Photo</th>
                                             <th>Make</th>
                                             <th>Model</th>
                                             <th>Year</th>
                                         </tr>
                                         </thead>
                                         <tbody>
                                         <tr>
                                             <td><img src="{{$car->photos->first()->name}}" alt="" height="70px"></td>
                                             <td>{{$car->make}}</td>
                                             <td>{{$car->model}}</td>
                                             <td>{{$car->year}}</td>
                                         </tr>

                                         </tbody>
                                     </table>
                                 @else
                                 No cars in listing
                                 @endif


                                 </div>
                        </div>

                    </div>


                </div>
            </div>


        </div>
    </div>

    @endsection