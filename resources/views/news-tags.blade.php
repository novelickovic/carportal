@extends('layouts.interface')

@section('custom_css')
    <link href="{{asset('css/custom-front.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('main_content')
    <div class="cn-top-content">
    </div>

    <div class="cd-breadcrumb">
        <div class="container">
            <span class="cd-breadcrumb-inactive">Home / News / </span> Search by tag
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
            <div class="col-md-9">
                @if(count($news) == 0)

                    <div class="cn-box news-box">
                        <div class="alert alert-danger mt-3">
                            0 results found. Please try another search!
                        </div>
                    </div>
                @else
                    <div class="alert alert-info ">
                        {{count($news)}} results found for <strong>{{$word}}</strong>
                    </div>
                @endif
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

