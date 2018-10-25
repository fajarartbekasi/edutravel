<?php

use App\Models\Thread\Thread;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('threads', 'Thread\ThreadController@index');

Route::get('threads/create', 'Thread\ThreadController@create');

Route::get('threads/{channel}/{thread}', 'Thread\ThreadController@show');

Route::post('threads', 'Thread\ThreadController@store');

Route::get('threads/{channel}', 'Thread\ThreadController@index');

Route::post('threads/{channel}/{thread}/replies', 'Reply\ReplyController@store');

Route::post('/replies/{reply}/favorites', 'Favorite\FavoriteController@store');

Route::get('/profiles/{user}', 'Profile\ProfileController@show');







Route::group(['prefix'=>'plans'], function(){
    
    Route::get('/plans','Plan\PlanController@index')->name('plans.index');
    Route::get('/create','Plan\PlanController@create')->name('plans.create');
    
});


Route::group(['prefix'=>'users'], function(){


    Route::get('/booking', 'Booking\BookingController@index')->name('users.booking');
    Route::get('/show-booking', 'Booking\BookingController@show')->name('users.show.booking');

    Route::get('/ceck-modules', 'Module\ModuleController@index')->name('users.check-modules');
    Route::get('/show-module/speaking', 'Module\ModuleController@show')->name('users.show-module.speaking');

    Route::get('/series/Step-by-step-for-learn-english-speak', 'Module\LearnController@show')->name('users.series.Step-by-step-for-learn-english-speak');

    Route::get('/series/Search-partner-to-speaking', 'Module\SeriesController@show')->name('users.series.Search-partner-to-speaking');
    
});
