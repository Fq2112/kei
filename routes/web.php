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

Route::group(['prefix' => '/'], function () {

    Route::get('/', [
        'uses' => 'KeiController@index',
        'as' => 'dashboard'
    ]);

    Route::get('projects', [
        'uses' => 'KeiController@projects',
        'as' => 'projects'
    ]);

    Route::group(['prefix' => 'services'], function (){

        Route::get('/', [
            'uses' => 'KeiController@services',
            'as' => 'services'
        ]);

        Route::get('rent', [
            'uses' => 'KeiController@rent',
            'as' => 'rent'
        ]);

        Route::get('trading', [
            'uses' => 'KeiController@trading',
            'as' => 'trading'
        ]);

    });

    Route::group(['prefix' => 'about'], function (){

        Route::get('president-message', [
            'uses' => 'KeiController@pm',
            'as' => 'president_message'
        ]);

        Route::get('history', [
            'uses' => 'KeiController@history',
            'as' => 'history'
        ]);

        Route::get('vision-mission-values', [
            'uses' => 'KeiController@vm',
            'as' => 'vision_mission_values'
        ]);

    });

    Route::get('hse-quality', [
       'uses' => 'KeiController@hse',
       'as' => 'hse'
    ]);

    Route::get('contact', [
       'uses' => 'KeiController@contact',
       'as' => 'contact'
    ]);

    Route::post('contact', [
       'uses' => 'MailController@postContact',
       'as' => 'contact.submit'
    ]);

});
