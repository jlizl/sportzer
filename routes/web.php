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

Route::get('/verifyemail/{token}', ['as' => 'verifyemail', 'uses' => 'Auth\RegisterController@verify']);

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function(){
        Route::get('/home', ['as' => 'home', function(){
            return view('home');
        }]);
});

Route::get('/verification',function(){
	return view("email.verification");
});

Route::get('/verified',function(){
	return view("email.emailconfirm");
});

Route::get('/organizer',function(){
	return view("organizer.index");
});

Route::get('organizer/calendar',function(){
	return view("organizer.calendar.calendar");
});

Route::get('organizer/events',function(){
	return view("organizer.events.events");
});

Route::get('organizer/events/create',function(){
	return view("organizer.events.create");
});

Route::get('organizer/news',function(){
	return view("organizer.news.news");
});

Route::get('organizer/blogs',function(){
	return view("organizer.blogs.blogs");
});