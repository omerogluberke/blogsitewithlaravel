<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::group(['middleware' => ['web','auth']], function(){

    Route::get('/', 'PagesController@getIndex');

    Route::get('blog/{slug}', array('as' => 'blog.single', 'uses' => 'BlogController@getSingle'));

    Route::get('blog', array('as' => 'blog.index', 'uses' => 'BlogController@getIndex'));

    Route::get('contact', 'PagesController@getContact');

    Route::get('about', 'PagesController@getAbout');

    Route::resource('posts', 'PostController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
