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

Route::get('welcomeLaravel', function () {
    return view('welcome');
});

Route::get('hello', function(){
	return 'Hello Laravel';
});

// ------ test Laravel -------
Route::get('welcome/hello','Auth\LoginController@hello');
Route::get('parameter/{id?}','Auth\LoginController@parameter');
Route::get('book/{id}','Auth\Logincontroller@book')->Where('id','[0-9]+');
Route::match(['get','post'],'bill',function(){
	if(Request::isMethod('get')){
		return 'This is GET Method';
	}
	if(Request::isMethod('post')){
		return 'This is POST Method';
	}
});

Route::any('poll','Auth\Logincontroller@poll');
Route::get('index','MovieController@index');
Route::get('viewmovie','MovieController@viewMovie');
Route::get('radio','RadioController@index');

// -------- Song Website Project -----------

Route::get('songIndex','Song\SongController@index');
Route::resource('song','Song\SongController');

// -------- Korean Song Website Project (NEW Project) -----------

Route::resource('songkorea','SongkoreaController');
Route::resource('blog','BlogsongkoreaController');
Route::resource('comment','CommentController');



// -------- Korean Song Website Project (Authentication Section) -----------
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'SongkoreaController@index');
