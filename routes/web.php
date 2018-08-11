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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin'], function (){

    Route::get('/admin', function (){
        return view('admin.index');
    })->name('admin.index');
    Route::resource('admin/users', 'AdminUsersController', ['except'=>['create', 'show']]);

    Route::resource('admin/categories', 'AdminCategoriesController', ['except' =>['create', 'show']]);

    Route::resource('admin/posts', 'AdminPostsController');

    Route::resource('admin/media', 'AdminMediasController');

});

Route::group(['middleware'=>'author'], function(){

    Route::resource('/author', 'AuthorController');

    Route::get('/author/showprofile/{id}', 'AuthorController@showProfile')->name('author.showprofile');

    Route::patch('/author/updateprofile/{id}', 'AuthorController@updateProfile')->name('author.updateprofile');

});





    Route::get('/user', function(){
        return view('user.index');
    });

    Route::resource('user/profile', 'UserProfilesController');

    Route::resource('user/cars', 'UserCarsController');

    //Route::resource('user/images', 'CarImagesController');

    Route::post('user/car/images', 'UserCarsController@storeImages');

    Route::get('user/car/edit/images/{car_id}', function ($car_id){
        $car = App\Car::findOrFail($car_id);
        $photos = $car->photos;
        return view ('user.car.editImages', compact('car' ));
    })->name('cars.edit.images');

    Route::delete('user/car/edit/images/{id}', 'UserCarsController@customDelete');






