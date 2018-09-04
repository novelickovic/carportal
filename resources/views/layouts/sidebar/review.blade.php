<div class="news-search mb-4">
    <div class="title mb-2">Search</div>
    {!! Form::open(['method'=>'POST', 'action'=>'NewsReviewsController@searchReviews'])!!}
    <div class="input-group">
        <input name="word" type="text" class="form-control form-search" placeholder="Search reviews">
        <span class="input-group-btn">
            <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
        </span>
    </div>
    {!! Form::close() !!}


</div>

<div class="news-search mb-4">
    <div class="title mb-2">most popular</div>
    @foreach($popular as $pop)
        <div class="mb-2">
            <div class="mp-img">
                <a href="{{url("/news/$pop->slug")}}">
                    <img src="{{$pop->photo->name}}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="mp-content">
                <a href="{{url("/news/$pop->slug")}}">{{$pop->title}}</a>
            </div>
        </div>
    @endforeach
</div>


<div class="news-search">
    <div class="title mb-2">Tags</div>
    <div class="tags-list">
        <ul>
            @include('layouts.tags.reviewstag')


        </ul>
    </div>
</div>