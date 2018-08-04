@extends('layouts.admin')

@section('custom_css')

    <link href="{{asset('css/admin.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Posts</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Posts</li>
                    <li class="breadcrumb-item active">Edit post</li>
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
                    <h3><i class="fa fa-file-text-o"></i> Edit post</h3>
                </div>
                <!-- end card-header -->

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


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <div class="card mb-3">

                                <div class="card-body">

                                    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
                                    <div class="row">

                                        <div class="form-group col-xl-9 col-md-8 col-sm-12">
                                            <div class="form-group">
                                                {!! Form::label('title', 'Post title') !!}
                                                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('body', 'Post body') !!}
                                                {!! Form::textarea('body', null, ['class'=>'form-control editor']) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('meta_title', 'Meta title') !!}
                                                {!! Form::text('meta_title', null, ['class'=>'form-control']) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('meta_description', 'Meta description') !!}
                                                {!! Form::text('meta_description', null, ['class'=>'form-control']) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('tags', 'Tags') !!}
                                                {!! Form::text('tags', null, ['class'=>'form-control']) !!}
                                            </div>

                                            <div class="form-group">
                                                <div class="form-group">
                                                    {!! Form::label('status', 'Article status') !!}<br>
                                                    {!! Form::select('status',['0'=>'Inactive', '1'=>'Active (Published)'], null, ['class'=>'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('category_id', 'Select category') !!}<br>
                                                {!! Form::select('category_id',$categories, null, ['class'=>'form-control']) !!}
                                            </div>

                                            {!! Form::hidden('user_id', "$user_id") !!}

                                            

                                        </div>

                                        <div class="form-group col-xl-3 col-md-4 col-sm-12 border-left">

                                            <div class="form-group">
                                                <img src="{{$post->photo->name}}" alt="" class="img-fluid">

                                                <br><br>
                                                {!! Form::label('photo_id', 'Thumbnail image') !!}<br>Leave if you don't want to change
                                                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

                                            </div>
                                        </div>

                                    </div><!-- end row -->


                                </div>
                                <!-- end card-body -->

                                <div class="card-footer">
                                    <div class="form-group">
                                        {!! Form::submit('Edit post', ['class'=>'btn btn-primary pull-right']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>

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

@section('scripts')
    <script>
        $(document).ready(function () {
            'use strict';
            $('.editor').trumbowyg();
        });
    </script>

    <script>
        $(document).ready(function () {
            'use strict';

            // ------------------------------------------------------- //
            // Text editor (WYSIWYG)
            // ------------------------------------------------------ //
            $('.editor').trumbowyg({
                removeformatPasted: true,
                autogrow: true,
                btnsDef: {
                    // Create a new dropdown
                    image: {
                        dropdown: ['insertImage', 'upload'],
                        ico: 'insertImage'
                    }
                },

                btns: [
                    ['viewHTML'],
                    ['undo', 'redo'],
                    ['formatting'],
                    'btnGrp-semantic',
                    ['superscript', 'subscript'],
                    ['link'],
                    ['image'],
                    'btnGrp-justify',
                    'btnGrp-lists',
                    ['horizontalRule'],
                    ['removeformat'],
                    ['fullscreen']
                ],


            });

        });
    </script>

@endsection
