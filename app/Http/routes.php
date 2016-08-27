<?php

use Illuminate\Support\Facades\Log;

Route::get('/{locale?}', function ($locale = 'br') {
    App::setLocale($locale);
    return view('welcome');
})->name('home');

Route::get('/albertoni/curriculum', 'FileController@getCurriculum')->name('curriculum');
