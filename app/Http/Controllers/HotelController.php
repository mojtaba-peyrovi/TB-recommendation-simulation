<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Search;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::paginate(9);
        return view('index', compact('hotels'));
    }



    public function getGeography()
    {
        $r = 6378137;
        $lat = 42.3547;
        $lon =-71.0615;
        $lat2 = 36.13599594;
        $lon2 = -115.1515128;
        $delta_lat = deg2rad($lat2-$lat);
        $delta_lon = deg2rad($lon2-$lon);
        $a = sin($delta_lat/2)^2  + cos(deg2rad($lat)) + cos(deg2rad($lat2)) + sin($delta_lon/2)^2;
        $c = 2 * atan2(sqrt($a), sqrt(1-$a));
        $d = 6371*$c;
        //dd($d);
        $x = 132.78;
        $y = 336.691;
        $x2 = -22.7422;
        $y2 = -43.3253;
        $radians = deg2rad($lat);

        ///$d = round(sqrt(($x2-$x)^2 + ($y2-$y)^2),2);
        //$hotels = Hotel::where('')
        return view('geographical', compact('lat','lon','x','y','d'));
    }

    public function getTopSearches()
    {
        $country = 'th';
        $hotels = Search::where()
        return view('top-searches');
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
