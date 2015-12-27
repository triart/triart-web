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

Route::get('/', ['uses' => 'WebController@index']);
Route::get('/about', ['uses' => 'WebController@about']);
Route::get('/contact', ['uses' => 'WebController@contact']);
Route::post('/contact',['uses' => 'WebController@postContact']);
Route::get('/disclaimer', ['uses' => 'WebController@disclaimer']);
Route::get('/team', ['uses' => 'WebController@team']);

//Route::get('artworker/{id}',['uses' => 'WebController@view']);
//Route::get('art/{id}',['uses' => 'WebController@artDetail']);
//Route::get('category/{id}',['uses' => 'WebController@viewCategory']);
//Route::get('/{username}',['uses' => 'WebController@viewByUsername'])->where('name', '[A-Za-z]+');

Route::get('category/{slug}',['uses' => 'WebController@viewCategoryBySlug']);
Route::get('/@{username}',['uses' => 'WebController@viewByUsername'])->where('name', '[A-Za-z]+');
Route::get('/@{username}/{art_slug_url}',['uses' => 'WebController@viewArtBySlug']);

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

        Route::get('/carousel', ['uses' => 'ContentController@carousel']);
        Route::post('/carousel/video', ['uses' => 'ContentController@postCarouselVideo']);
        Route::get('/carousel/{carousel_id}', ['uses' => 'ContentController@viewCarousel']);
        Route::post('/carousel/{carousel_id}', ['uses' => 'ContentController@updateCarousel']);
        Route::get('/carousel/{carousel_id}/enable', ['uses' => 'ContentController@enableCarousel']);


        Route::get('/team', ['uses' => 'TeamController@index']);
        Route::get('/team/create', ['uses' => 'TeamController@createForm']);
        Route::post('/team', ['uses' => 'TeamController@store']);
        Route::get('/team/{id}', ['uses' => 'TeamController@view']);
        Route::put('/team/{id}', ['uses' => 'TeamController@update']);
        Route::get('/team/{id}/delete', ['uses' => 'TeamController@delete']);


        Route::get('/client', ['uses' => 'ClientController@index']);
        Route::get('/client/create', ['uses' => 'ClientController@createForm']);
        Route::post('/client', ['uses' => 'ClientController@store']);
        Route::get('/client/{id}', ['uses' => 'ClientController@view']);
        Route::put('/client/{id}', ['uses' => 'ClientController@update']);
        Route::get('/client/{id}/delete', ['uses' => 'ClientController@delete']);


        Route::get('/content', ['uses' => 'ContentController@content']);
        Route::post('/content', ['uses' => 'ContentController@saveContent']);

        Route::get('/art', ['uses' => 'DashboardArtController@index']);
        Route::get('/featured', ['uses' => 'DashboardArtController@featuredPage']);
        Route::get('/art/{art_id}/featured', ['uses' => 'DashboardArtController@featured']);
    });

    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');


    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
});



