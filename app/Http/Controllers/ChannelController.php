<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channels = Channel::all();
        return view('channel-list')->with('channels',$channels);
//          return $channels->toJson();



    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sections = Section::all();
        return view('channel-create')->with('sections',$sections);
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
        $channel = new Channel();
        $channel->channelname = $request->channelname;
        $channel->ulchannel = $request->ulchannel;
        $channel->section = $request->section;
        $channel->save();
        return Redirect('channel/list');

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
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ch= Channel::find($id);
        return view('channel-edit')->with('ch',$ch);
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
       $ch = Channel::find($id);
       $ch->channelname = $request->channelname;
       $ch->ulchannel = $request->ulchannel;
       $ch->section = $request->section;
       $ch->save();
        return Redirect('channel/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $ch = Channel::find($id);
        $ch->channelname = $request->channelname;
        $ch->ulchannel = $request->ulchannel;
        $ch->section = $request->section;

        $ch->delete();
        return Redirect('channel/list');
    }


    public function getRegister(CountryRepository $countryRepository)
    {
        //...
        $countries = $countryRepository->lists();
        return view('auth.register', compact('socialProviders', 'countries'));
    }

}
