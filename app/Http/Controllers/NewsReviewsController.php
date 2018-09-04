<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsReviewsController extends Controller
{
    //
    public function showNews($slug){
        $newsKey = 'news_' . $slug;
        // Check if blog session key exists
        // If not, update view_count and create session key
        if (!Session::has($newsKey)) {
            Post::where('slug', $slug)->increment('view_count');
            Session::put($newsKey, 1);
        }
        $popular = Post::where('category_id','1')->orderBy('view_count','desc')->limit(2)->get();

        $news = Post::where('slug',$slug)->first();
        return view('one-news',compact('news', 'popular'));
    }
    public function allNews() {

        $news = Post::where('category_id','1')->orderBy('id','desc')->get();
        $popular = Post::where('category_id','1')->orderBy('view_count','desc')->limit(2)->get();
        return view('news', compact('news', 'popular'));
    }

    public function searchNews(Request $request) {
        $input = $request->all();
        $word = $input['word'];
        $news = Post::search($word)->where('category_id',1)->orderBy('id','desc')->get();
        $popular = Post::where('category_id','2')->orderBy('view_count','desc')->limit(2)->get();


        return view('news-search', compact('news', 'word', 'popular'));
    }

    public function showNewsTagsResults($tag) {

        $word = $tag;
        $news = Post::search($tag)->where('category_id',1)->orderBy('id','desc')->get();
        $popular = Post::where('category_id','2')->orderBy('view_count','desc')->limit(2)->get();
        return view('news-tags', compact('news', 'word', 'popular'));

    }
    public function showReview($slug){

        $reviewKey = 'review_' . $slug;
        // Check if blog session key exists
        // If not, update view_count and create session key
        if (!Session::has($reviewKey)) {
            Post::where('slug', $slug)->increment('view_count');
            Session::put($reviewKey, 1);
        }
        $popular = Post::where('category_id','2')->orderBy('view_count','desc')->limit(2)->get();
        $review = Post::where('slug', $slug)->first();
        return view('review',compact('review', 'popular'));
    }
    public function allReviews() {

        $reviews = Post::where('category_id','2')->orderBy('id','desc')->get();
        $popular = Post::where('category_id','2')->orderBy('view_count','desc')->limit(2)->get();

        return view('reviews', compact('reviews', 'popular'));
    }
    public function searchReviews(Request $request) {
        $input = $request->all();
        $word = $input['word'];
        $reviews = Post::search($word)->where('category_id',2)->orderBy('id','desc')->get();
        $popular = Post::where('category_id','2')->orderBy('view_count','desc')->limit(2)->get();


        return view('reviews-search', compact('reviews', 'word', 'popular'));
    }

    public function showReviewsTagsResults($tag) {
        $word = $tag;
        $reviews = Post::search($tag)->where('category_id',2)->orderBy('id','desc')->get();

        $popular = Post::where('category_id','2')->orderBy('view_count','desc')->limit(2)->get();

        return view('reviews-tags', compact('reviews', 'word', 'popular'));

    }
}
