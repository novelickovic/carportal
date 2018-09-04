@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Media</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Media</li>
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

        <div class="col-sm-8">
            <div class="card mb-3">
                <div class="card-header"><h3><i class="fa fa-picture-o"></i> All pictures</h3>
                Images created by administrators, authors and users
                </div>
                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Created by</th>
                            <th>Created at</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($photos as $photo)


                            <tr>
                                <td>{{$photo->id}}</td>
                                <td><img src="{{$photo->name}}" alt="" class="img-fluid" width="150"></td>
                                <td>@if($photo->created_by)

                                        @if(\App\User::find($photo->created_by))
                                            {{$photo->owner->name}}
                                        @else
                                            **Deleted user**
                                        @endif

                                    @endif
                                </td>
                                <td>{{$photo->created_at->diffForHumans()}}</td>

                                <td>{!! Form::open(['class'=>'form-inline','method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}


                                    <button class="btn btn-danger btn-sm" value="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                    <div class="row">
                        <div class="col-sm-4 offsed-md-5">
                            {{$photos->links()}}
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>




@endsection