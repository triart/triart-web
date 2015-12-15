<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('artworker/{id}',['uses' => 'ArtworkerController@view']);


Route::group(['prefix' => 'dashboard'], function () {
    Route::group(['middleware' => 'auth'], function () {

        Route::get('/home', 'DashboardController@home');

        Route::get('/artworker', ['uses' => 'ArtworkerController@index']);
        Route::get('/artworker/create', ['uses' => 'ArtworkerController@createForm']);
        Route::post('/artworker', ['uses' => 'ArtworkerController@store']);
        Route::get('/artworker/{id}', ['uses' => 'ArtworkerController@view']);
        Route::put('/artworker/{id}', ['uses' => 'ArtworkerController@update']);
        Route::get('/artworker/{id}/delete', ['uses' => 'ArtworkerController@delete']);
        Route::post('/avatar/{id}', ['uses' => 'ArtworkerController@uploadAvatar']);

        Route::get('/artworker/{artworker_id}/art', ['uses' => 'ArtController@index']);
        Route::post('/artworker/{artworker_id}/art', ['uses' => 'ArtController@store']);
        Route::get('/artworker/{artworker_id}/art/create', ['uses' => 'ArtController@createForm']);
        Route::get('/art/{id}', ['uses' => 'ArtController@view']);
        Route::put('/art/{id}', ['uses' => 'ArtController@update']);
        Route::post('/art/{id}/upload', ['uses' => 'ArtController@uploadArt']);
        Route::get('/art/{id}/delete', ['uses' => 'ArtController@delete']);

        Route::get('/category', ['uses' => 'CategoryController@index']);
        Route::get('/category/create', ['uses' => 'CategoryController@createForm']);
        Route::post('/category', ['uses' => 'CategoryController@store']);
        Route::get('/category/{id}', ['uses' => 'CategoryController@view']);
        Route::put('/category/{id}', ['uses' => 'CategoryController@update']);
        Route::get('/category/{id}/delete', ['uses' => 'CategoryController@delete']);
    });

    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');


    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
});



