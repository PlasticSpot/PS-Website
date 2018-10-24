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

Route::get('/', [
    'uses' => 'FrontController@index',
    'as' => 'home'
]);

Route::get('/vision', [
    'uses' => 'FrontController@getVision',
    'as' => 'vision'
]);

Route::get('/plastic-surgery-{location}', [
    'uses' => 'FrontController@getLocation',
    'as' => 'plastic.surgery.location'
]);

Route::get('/terms', [
    'uses' => 'FrontController@getTerms',
    'as' => 'terms'
]);

Route::get('/privacy', [
    'uses' => 'FrontController@getPrivacy',
    'as' => 'privacy'
]);


// --- Below are routes that are for testing purposes only -- //

Route::get('/map', function () {
    return view('front.testing-files.map-test');
})->name('map-test');