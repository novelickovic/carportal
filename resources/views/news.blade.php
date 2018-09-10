@extends('layouts.interface')

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

    <div class="container pt-4">
        <div class="row">
            <div class="col-md-9">

                @foreach($news as $new)
                    <div class="cn-box news-box">

                        <div class="row">
                            <div class="col-sm-5 news-pic">
                                <a href="{{url("/news/$new->slug")}}">
                                <img src="{{$new->photo->name}}" alt="">
                                </a>
                            </div>
                            <div class="col-sm-7">
                                <div class="news-title"><a href="{{url("/news/$new->slug")}}">{{$new->title}}</a></div>
                                <div class="news-info">{{$new->created_at->diffForHumans()}} | <i class="fa fa-eye"></i> {{$new->view_count}}</div>
                                <div class="news-desc">{!! str_limit(strip_tags($new->body), 150, ' ...') !!}</div>
                                <div class="news-read-more"><a href="{{url("/news/$new->slug")}}">read more &raquo</a></div>

                            </div>
                        </div>

                    </div>
                    @endforeach
                    <div class="mt-4">{{ $news->links() }}</div>

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

