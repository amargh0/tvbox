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
    $sections=\App\Section::all();
    $channels = \App\Channel::all();
//        return $channels;
    $currentSection = '';
    $ulchannel = \App\Channel::first();
    return view('welcome')->with('sections',$sections)->with('channels',$channels)->with('ulchannels',$ulchannel->ulchannel)->with('currentSection',$currentSection);

});



Route::get('/{section_id}/', function ($section_id) {
    $sections=\App\Section::all();
    $channels = \App\Channel::where('section',$section_id)->get();
    $ulchannel = \App\Channel::where('section',$section_id)->first();
    $currentSection = $section_id;
    return view('welcome')->with('sections',$sections)->with('channels',$channels)->with('ulchannels',$ulchannel->ulchannel)->with('currentSection',$currentSection);

});




//Route::get('/play', function () {
//    return redirect('we/1');
//});

Route::get('/{section_id}/play/{channel_id}','PlayController@index');
Route::get('/play/{channel_id}','PlayController@index2');

Route::get('/channel/create','ChannelController@create');
Route::get('/channel/list','ChannelController@index');
Route::get('/channel/edit/{id}','ChannelController@edit');
Route::post('/channel/update/{id}','ChannelController@update');
Route::get('/channel/delete/{id}','ChannelController@destroy');
Route::post('/channel/store','ChannelController@store');
Route::get('/section/list','SectionController@index');
Route::get('/section/create','SectionController@create');
Route::post('/section/store','SectionController@store');
Route::get('/section/edit/{id}','SectionController@edit');
Route::post('/section/update/{id}','SectionController@update');
Route::get('/section/delete/{id}','SectionController@destroy');

Route::get('/tag/{id}','SectionController@tagIndex');

//Auth::routes();


