<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
//use Mcamara\LaravelLocalization\LaravelLocalization;


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

Route::group(
    ['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::namespace("Front")->group(function(){
        Route::get("/","FrontController@index")->name('home');
        Route::get("/about","FrontController@about")->name('about');
        //Route::get("/gallery","FrontController@gallery")->name('gallery');
        Route::get("/user","FrontController@show")->middleware(['auth']);
    });
});

//Route::namespace("Front")->group(function(){
//    Route::get("/","FrontController@index")->name('home');
//    Route::get("/ar","FrontController@homear")->name('home-ar');
//    Route::get("/en","FrontController@homeen")->name('home-en');
//    Route::get("/about","FrontController@about")->name('about');
//    Route::get("/gallery","FrontController@gallery")->name('gallery');
//    Route::get("/user","FrontController@show")->middleware(['auth']);
//});


require __DIR__.'/auth.php';


