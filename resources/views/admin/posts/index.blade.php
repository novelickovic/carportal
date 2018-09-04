@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Posts</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Posts</li>
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

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

            <div class="card mb-3">

                <div class="card-header">
                    <span class="pull-right"><a href="{{route('posts.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add new post</a></span>
                    <h3><i class="fa fa-file-text-o"></i> All posts</h3>
                </div>
                <!-- end card-header -->

                <div class="card-body">


                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Thumbnail</th>
                            <th>Post details</th>
                            <th>Category</th>
                            <th>Views</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($posts as $post)
                            <tr>
                                <td style="vertical-align: middle">
                                    @if($post->photo_id)
                                        <img class="post-image-style" src="{{$post->photo->name}}" />
                                        @else
                                            No photo
                                        @endif

                                </td>
                                <td>

                                    <h5>{{$post->title}}</h5>
                                    Posted by <b>{{$post->user->name}}</b>, {{$post->created_at->diffForHumans()}}<br />

                                    <small>{!! str_limit(strip_tags($post->body), 100, ' &raquo &raquo &raquo') !!}</small>
                                </td>

                                <td>{{$post->category->name}}</td>
                                <td>{{$post->view_count}}</td>

                                <td>{!! Form::open(['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id]]) !!}
                                    @if($post->status == 1)
                                        {!! Form::hidden('status', '0') !!}
                                        {!! Form::submit('active', ['class'=>'btn btn-success btn-sm']) !!}
                                    @else
                                        {!! Form::hidden('status', '1') !!}
                                        {!! Form::submit('inactive', ['class'=>'btn btn-danger btn-sm']) !!}

                                    @endif

                                    {!! Form::close() !!}</td>

                                <td>
                                    {!! Form::open(['class'=>'form-inline','method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}

                                    {{--Preview link--}}
                                    @if($post->category_id == 1)
                                        <a href="{{url("/news/$post->slug")}}" class="btn btn-warning btn-sm mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                    @else
                                        <a href="{{url("/reviews/$post->slug")}}" class="btn btn-warning btn-sm mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a>


                                    @endif


                                    {{--Edit link--}}
                                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary btn-sm mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                    <button class="btn btn-danger btn-sm" value="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                {!! Form::close() !!}
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                    <div class="row mt-5">
                        <div class="col-sm-3 offset-sm-5">{{ $posts->links() }}</div>
                    </div>



                </div>
                <!-- end card-body -->

            </div>
            <!-- end card -->

        </div>
        <!-- end col -->

    </div>
    <!-- end row -->




@endsection