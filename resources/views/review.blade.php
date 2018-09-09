@extends('layouts.interface-posts')
@section('title')
    <title>{{$review->meta_title}}</title>
@endsection
@section('description')
    <meta name="description" content="{{$review->meta_description}}">
@endsection

@section('custom_css')
    <link href="{{asset('css/custom-front.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('main_content')
    <div class="cn-top-content">
    </div>

    <div class="cd-breadcrumb">
        <div class="container">
            <span class="cd-breadcrumb-inactive">Home /</span> Reviews
        </div>
    </div>

    <div class="container  pt-4">
        <div class="row">
            <div class="col-md-9 news-box mb-4">

                <div class="one-news-title">{{$review->title}}</div>
                <div class="one-news-info"><i class="fa fa-calendar"></i> {{$review->created_at->diffForHumans()}} | <i class="fa fa-eye"></i> {{$review->view_count}} views</div>
                <img src="{{$review->photo->name}}" alt="" class="img-fluid mb-4">
                {!! $review->body !!}


            </div>

            <div class="col-md-3">
                @include('layouts.sidebar.review')


            </div>

        </div>
    </div>



@endsection


@section('scripts')
    <script src="{{asset('js/custom-front-js.js')}}"></script>

@endsection

