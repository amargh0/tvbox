<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Play;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class PlayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($section_id,$channel_id)
    {

        $channels = Channel::find($channel_id);
        $ulchannel = $channels->ulchannel;
        $sections=\App\Section::all();
        $currentSection = $section_id;
        $channels = \App\Channel::where('section',$section_id)->get();
        return view('welcome')->with('sections',$sections)->with('channels',$channels)->with('ulchannels',$ulchannel)->with('currentSection',$currentSection);

//        return view('play')->with('channels',$channels)->with('ulchannels',$ulchannel);

        //  return $users->toJson();






    }



    public function index2($channel_id)
    {

        $channels = Channel::find($channel_id);
        $ulchannel = $channels->ulchannel;
        $sections=\App\Section::all();
        $currentSection = '';
        $channels = \App\Channel::all();
        return view('welcome')->with('sections',$sections)->with('channels',$channels)->with('ulchannels',$ulchannel)->with('currentSection',$currentSection);

//        return view('play')->with('channels',$channels)->with('ulchannels',$ulchannel);

        //  return $users->toJson();






    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        return view('channel-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //d($request);
//        $channel = new Channel();
//        $channel->channelname = request('channelname');
//        $channel->ulchannel = request('ulchannel');
//        $channel->save();
//        return Redirect('channel/list');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return "oka";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getRegister(CountryRepository $countryRepository)
    {
        //...
        $countries = $countryRepository->lists();
        return view('auth.register', compact('socialProviders', 'countries'));
    }

}
