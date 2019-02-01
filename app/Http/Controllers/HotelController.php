<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use App\Hotel;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::paginate(10);
        //dd($hotels);
        return view('index', compact('hotels'));
    }



    public function getGeography()
    {
        $d = 100;
        $lat = 156565;
        $lon = 1565656;
        $x = 1;
        $y = 1;

        // $process = new process("python3 C:\Users\mojiway\Desktop\test.py \"{$text}\"");
        // //$process->setInput('foobar');
        // $process->run();

        // $hotels = Hotel::where()
        return view('geographical', compact('lat','lon','x','y','d'));
    }

    public function getTopSearches()
    {
        $city = 'Seattle';
        $hotels = Hotel::where('city',$city)
                        ->orderBy('searches','desc')
                        ->limit(10)
                        ->get();

        return view('top-searches', compact('hotels','city'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(hotel $hotel)
    {
        $city = $hotel->city;
        //dd($city);
        $related_hotels = Hotel::where('city', $city)->limit(4)->get();
        return view('show',compact('hotel','related_hotels'));
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

}
