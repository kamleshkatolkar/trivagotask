<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Rules\HotelName;
use App\Rules\CategoryName;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
         
        $Hotel = new Hotel();
        $validation = Validator::make($request->all(),[ 
            'name' =>  [
                'required','min:10','max:100',
                new HotelName(),
            ],
            'category' =>  [
                'required','alpha',
                new categoryName()
            ],
            'location.city' => 'required|alpha_dash|max:50',
            'location.state' => 'required|alpha|max:100',
            'location.country' => 'required|alpha|max:100',
            'location.zipcode' => 'required|numeric|max:5',
            'location.address' => 'required|max:100',
            'price' => 'required|numeric|max:4',
            'availability' => 'required|max:4',
            'rating'=>'required|min:0|max:5|numeric'
        ]);

        $errors = $validation->errors();

        return $errors->toJson();
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return  response()->json('dd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $hotel)
    {
        //
    }
}
