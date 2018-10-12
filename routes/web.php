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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'plans'], function(){
    
    Route::get('/','Plan\PlanController@index')->name('plans.index');
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