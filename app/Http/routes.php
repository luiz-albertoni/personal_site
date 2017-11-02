<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

$locale= '';

Route::group(['middleware' => ['web']], function () {

    Route::get('/{locale?}', function () {

        $language = Session::get('locale', Config::get('app.locale'));
        if(!empty($language)){
            App::setLocale($language);
        }


        return view('welcome');

    })->name('home');

    Route::get('/albertoni/curriculum', 'FileController@getCurriculum')->name('curriculum');

    Route::get('/albertoni/work_stuff', 'WorkController@index')->name('work_stuff');

    Route::get('/albertoni/download/app/{app_type}/{app_name}', 'FileController@getApp');


    Route::post('/albertoni/language', function (Request $request) {

       $locale = $request->input('language');
        App::setLocale($locale);
        \Session::put('locale', $locale);
        return Redirect::back();
    });


    Route::get('/albertoni/post/{post}', 'PostController@getPost');

    Route::post('/albertoni/sendMail', 'ContactController@sendMail');

    Route::get('/albertoni/redirect', 'SocialAuthController@redirect')->name('redirect');

    Route::get('/albertoni/callback', 'SocialAuthController@callback');

    Route::post('/albertoni/new/post', 'PostController@newPost');
});


Route::get('/albertoni/blog/searchPost', 'PostController@searchPost');

Route::get('/albertoni/blog/index', 'PostController@index')->name('blog_index');

Route::get('/albertoni/blog/edit/post/{id}', 'PostController@edit')->name('blog_edit');

Route::delete('/albertoni/blog/delete/post/{id}', 'PostController@delete')->name('blog_delete');

Route::post('/albertoni/blog/update/post/{id}', 'PostController@update');


Route::get('/albertoni/blog/post/create', function () {
    return view('blog/add_post');
})->name('create_index');


Route::get('/albertoni/blog/show/post/{id}', 'PostController@show')->name('blog_post');


Route::get('/albertoni/blog', 'BlogController@index')->name('blog');
