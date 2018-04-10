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
if (App::environment('production')) { URL::forceSchema('https'); }

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
// Route::get('/auth/facebook', 'Auth\AuthController@redirectToProvider');
// Route::get('/auth/twitter', 'Auth\AuthController@redirectToProvider');
Route::get('/auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('/auth/callback/{provider}', 'Auth\AuthController@handleProviderCallback');

Route::get('/home', 'HomeController@index');
Route::post('/home', 'HomeController@index');
Route::post('/upload', 'HomeController@upload');
Route::get('/upload', 'HomeController@uploadFile');
Route::get('/images/{imageName}/{width?}/{height?}', 'ImagesController@show');

Route::resource('pricing-models', 'PricingModelsController');
Route::resource('pricing-rates', 'PricingRatesController');
Route::resource('categories', 'CategoriesController');
Route::resource('listing', 'ListingController');
Route::resource('users', 'UsersController');

Route::get('/vendor', 'VendorsController@index');
Route::get('/vendor/listings', 'VendorsController@listings');
Route::get('/vendor/create', 'VendorsController@create');
Route::post('/vendor/create', 'ListingController@store');