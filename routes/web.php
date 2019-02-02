<?php

use App\Models\Thread\Thread;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index');

/**
 * route for call page channel create
 * if credential not verified cann't create channel
 * and if credential not authenticated cann't create channel
 */

Route::group(['prefix' => 'channels', 'middleware' => ['auth','verified']], function(){
    /**
     * call page create channel
     */
    Route::get('/', 'Channel\ChannelController@create')->name('channels.create');
    /**
     * route for store the data channel to database
     */
    Route::post('/store', 'Channel\ChannelController@store')->name('channels.store');

});

/**
 * route group for call all threads
 * if credential not verified cann't create thread
 * if credential not authenticated cann't create thread
 */
    
Route::group(['prefix' => 'threads'], function(){
    /**
     * call page index all threads data for all users.
     */
    Route::get('/', 'Thread\ThreadController@index')->name('threads.index');
    /**
     * call page create form thread.
     */
    Route::get('/create', 'Thread\ThreadController@create')->name('threads.create');
    /**
     * call page show thread.
     */
    Route::get('/{channel}/{thread}', 'Thread\ThreadController@show')->name('threads.show');
    /**
     * call function destroyed thread.
     */
    Route::delete('/{channel}/{thread}', 'Thread\ThreadController@destroy')->name('threads.destroy');
    /**
     * call function store the data new thread to database.
     */
    Route::post('', 'Thread\ThreadController@store')->name('threads.store');
    /**
     * call page threads form channel.
     */
    Route::get('/{channel}', 'Thread\ThreadController@index');
    /**
     * get reply per thread.
     */
    Route::get('/{channel}/{thread}/replies', 'Reply\ReplyController@index');
    /**
     * call function store new reply thread to database.
     */
    Route::post('/{channel}/{thread}/replies', 'Reply\ReplyController@store');
    /**
     * call function subscriptions thread.
     */
    Route::post('/{channel}/{thread}/subscriptions','Thread\ThreadSubscriptionsController@store')->middleware('auth');
    /**
     * destroy subscriptions thread.
     */
    Route::delete('/{channel}/{thread}/subscriptions','Thread\ThreadSubscriptionsController@destroy')->middleware('auth');


});

/**
 * route group replies
 * if credential not verified cann't destroy repy.
 * if credential not verified cann't favorite reply.
 * if credential not verified cann't destroy favorite reply.
 */
Route::group(['prefix'=>'replies'], function(){
    /**
     * call function destroy reply.
     */
    Route::delete('/{reply}', 'Reply\ReplyController@destroy');
    /**
     * call function store favorite reply to database.
     */
    Route::post('/{reply}/favorites', 'Favorite\FavoriteController@store');
    /**
     * call function destroy favorite reply.
     */
    Route::delete('/{reply}/favorites', 'Favorite\FavoriteController@destroy');

     /**
     * call function update teply thread.
     */
    Route::patch('/{reply}', 'Reply\ReplyController@update');
});

/**
 * route group profiles
 * if credential unauthenticated cann't show profile.
 */
Route::group(['prefix' => 'profiles', 'middleware' => 'auth'], function(){
    /**
     * call function show profiles.
     */
    Route::get('/{user}', 'Profile\ProfileController@show')->name('profile');
    /**
     * get notification on profile page.
     */
    Route::get('/{user}/notifications', 'Profile\UserNotificationsController@index');
    /**
     * call function destroy notification on profile page.
     */
    Route::delete('/{user}/notifications/{notification}', 'Profile\UserNotificationsController@destroy');

});

Route::get('/events', 'Event\EventController@index');


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
