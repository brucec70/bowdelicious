<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome-temp');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('contact', function () {
    return view('pages.contact');
});
Route::post('contact', function () {
    return "form posted";
});
Route::get('faq', function () {
    return view('pages.faq');
});
Route::get('clipstyles', function () {
    return view('pages.clipstyles');
});
Route::get('fairsandevents', function () {
    return view('pages.clipstyles');
});
Route::get('latestproducts', function () {
    return view('pages.latestproducts');
});
