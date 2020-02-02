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
    return view('welcome');
});

Route::get("/homepage","adminControllers\ViewController@homeaction");
Route::get("/aboutus","adminControllers\ViewController@aboutaction");
Route::get("/ourworks","adminControllers\ViewController@ourworksaction");
Route::get("/portofolio","adminControllers\ViewController@portofolioaction");
Route::get("/contactus","adminControllers\ViewController@contactaction");
Route::get("/recentnews","adminControllers\ViewController@recentnewsaction");

Route::get("/insertData","adminControllers\ContacUsController@store");
