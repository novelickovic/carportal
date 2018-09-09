@extends('layouts.interface-posts')

@section('title')
    <title>{{$news->meta_title}}</title>
    @endsection
@section('description')
    <meta name="description" content="{{$news->meta_description}}">
    @endsection


@section('custom_css')
    <link href="{{asset('css/custom-front.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('main_content')
    <div class="cn-top-content">
    </div>

    <div class="cd-breadcrumb">
        <div class="container">
            <span class="cd-breadcrumb-inactive">Home /</span> News
        </div>
    </div>

    <div class="container  pt-4">
        <div class="row">
            <div class="col-md-9 news-box mb-4">

            <div class="one-news-title">{{$news->title}}</div>
            <div class="one-news-info"><i class="fa fa-calendar"></i> {{$news->created_at->diffForHumans()}} | <i class="fa fa-eye"></i> {{$news->view_count}} views</div>
                <img src="{{$news->photo->name}}" alt="" class="img-fluid mb-2">
                {!! $news->body !!}


            </div>

            <div class="col-md-3">


                @include('layouts.sidebar.news')

            </div>

        </div>
    </div>



@endsection


@section('scripts')
    <script src="{{asset('js/custom-front-js.js')}}"></script>

@endsection

