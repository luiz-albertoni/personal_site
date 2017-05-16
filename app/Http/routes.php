<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

Route::get('/{locale?}', function ()
{
    $language = Session::get('locale', Config::get('app.locale'));
    if(!empty($language)){
        App::setLocale($language);
    }

    return view('welcome');
})->name('home');

Route::get('/albertoni/curriculum', 'FileController@getCurriculum')->name('curriculum');

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



Route::get('/albertoni/blog', 'BlogController@index')->name('blog');
