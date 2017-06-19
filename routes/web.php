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


Route::get('/play', function () {
    return view('play');
});

Route::get('/channel/create','ChannelController@create');
Route::get('/channel/list','ChannelController@index');
Route::post('/channel/store','ChannelController@store');

//Auth::routes();


