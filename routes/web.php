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
    return redirect('play/1');
});

Route::get('/play/{ul}','PlayController@index');



Route::get('/channel/create','ChannelController@create');
Route::get('/channel/list','ChannelController@index');
Route::get('/channel/edit/{id}','ChannelController@edit');
Route::post('/channel/update/{id}','ChannelController@update');
Route::get('/channel/delete/{id}','ChannelController@destroy');
Route::post('/channel/store','ChannelController@store');

Route::get('/section/list','SectionController@index');
Route::get('/section/create','SectionController@create');
Route::post('/section/store','SectionController@store');
Route::get('/section/edit/{id}','SectionlController@edit');
Route::post('/section/update/{id}','SectionlController@update');
Route::get('/section/delete/{id}','SectionController@destroy');


//Auth::routes();


