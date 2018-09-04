<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Car;
use App\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'InterfaceController@homePage');

Route::get('/search', 'SearchController@show');
Route::post('/search', 'SearchController@showResults');
Route::get('/search/{id}', 'SearchController@showMakes');
Route::get('/cardetails/{id}', 'SearchController@showCar')->name('car.show');
Route::get('/models/get/{id}', 'SearchController@getCarmodels');
Route::get('/news', 'NewsReviewsController@allNews');
Route::get('/news/{id}', 'NewsReviewsController@showNews')->name('news.show');
Route::post('/news/search', 'NewsReviewsController@searchNews')->name('news.search');
Route::get('/reviews', 'NewsReviewsController@allReviews')->name('reviews.show');
Route::get('/reviews/{id}', 'NewsReviewsController@showReview');
Route::post('/reviews/search', 'NewsReviewsController@searchReviews')->name('reviews.search');
Route::get('/reviews/tags/{tag}', 'NewsReviewsController@showReviewsTagsResults');
Route::get('/news/tags/{tag}', 'NewsReviewsController@showNewsTagsResults');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin'], function (){

    Route::get('/admin', 'AdminController@index')->name('admin.index');

    Route::resource('admin/users', 'AdminUsersController', ['except'=>['create', 'show']]);

    Route::resource('admin/categories', 'AdminCategoriesController', ['except' =>['create', 'show']]);

    Route::resource('admin/posts', 'AdminPostsController');

    Route::resource('admin/media', 'AdminMediasController');

});

Route::group(['middleware'=>'author'], function(){

    Route::resource('/author', 'AuthorController');

    Route::get('/author/dashboard/{id}', 'AuthorController@dashboard')->name('author.dashboard');

    Route::get('/author/showprofile/{id}', 'AuthorController@showProfile')->name('author.showprofile');

    Route::patch('/author/updateprofile/{id}', 'AuthorController@updateProfile')->name('author.updateprofile');

});





Route::group(['middleware'=>'user'], function (){

    Route::get('/user', 'UserController@index');

    Route::resource('user/profile', 'UserProfilesController');

    Route::resource('user/cars', 'UserCarsController');



    Route::post('user/car/images', 'UserCarsController@storeImages');

    Route::get('user/car/edit/images/{car_id}', function ($car_id){
        $car = App\Car::findOrFail($car_id);
        $photos = $car->photos;
        return view ('user.car.editImages', compact('car' ));
    })->name('cars.edit.images');

    Route::delete('user/car/edit/images/{id}', 'UserCarsController@customDelete');

});






