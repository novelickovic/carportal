@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Posts</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Posts</li>
                    <li class="breadcrumb-item active">Create new post</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

            <div class="card mb-3">

                <div class="card-header">
                    <h3><i class="fa fa-file-text-o"></i> Create new post</h3>
                </div>
                <!-- end card-header -->

                <div class="card-body">


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <div class="card mb-3">

                                <div class="card-body">

                                    {!! Form::open(['method'=>'POST', 'action'=>['AdminPostsController@store', 'files'=>true]]) !!}
                                        <div class="row">

                                            <div class="form-group col-xl-9 col-md-8 col-sm-12">
                                                <div class="form-group">
                                                    {!! Form::label('title', 'Post title') !!}
                                                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('body', 'Post body') !!}
                                                    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('image_id', 'Thumbnail image') !!}<br>
                                                    {!! Form::file('image_id', null, ['class'=>'form-control']) !!}

                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Create post</button>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-3 col-md-4 col-sm-12 border-left">
                                                <div class="form-group">
                                                    <label>Meta title</label>
                                                    <input type="text" class="form-control" name="meta_title">
                                                </div>

                                                <div class="form-group">
                                                    <label>Meta description</label>
                                                    <input type="text" class="form-control" name="meta_description">
                                                </div>

                                                <div class="form-group">
                                                    <label>Tags</label>
                                                    <input type="text" class="form-control" name="keywords" id="tags" value="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Article status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="active">Active (published)</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('category_id', 'Select category') !!}<br>
                                                    {!! Form::select('category_id',$categories, null, ['class'=>'form-control']) !!}
                                                </div>

                                                {!! Form::hidden('user_id', "$user_id") !!}

                                            </div>

                                        </div><!-- end row -->
                                    {!! Form::close() !!}

                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->



                </div>
                <!-- end card-body -->

            </div>
            <!-- end card -->

        </div>
        <!-- end col -->

    </div>
    <!-- end row -->




@endsection