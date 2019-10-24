<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function list($noOfRecords,$start = null)
    {
    
     $hotel = new Hotel();   
     return $hotel->list($noOfRecords,$start);
    }


    public function details($id)
    {
    
     $hotel = new Hotel();   
     $response = $hotel->getDetails($id);
     
     return $response;
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Hotel = new Hotel();
        
        return $Hotel->createHotel($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
     $hotel = new Hotel();   
     $response = $hotel->getDetails($id);
     
     return $response;
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $hotel = new Hotel();   
        $response = $hotel->updateHotelInfo($request);
        
        return $response;   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $hotel = new Hotel();   
        $response = $hotel->deleteHotel($request);
        
        return $response;   
    }

    /**
     * Book the item with the specified information
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $hotel = new Hotel();   
        $response = $hotel->deleteHotel($request);
        
        return $response;   
    }
}
