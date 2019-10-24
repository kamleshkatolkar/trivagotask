<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Rules\HotelName;
use App\Rules\CategoryName;
use Response;
use DB;
use App\Location;

class Hotel extends Model
{
    protected $table = 'hotels';
    
    public function list($noOfRecords,$start){
        
        $take = $noOfRecords == 0 ? Hotel::get()->count(): $noOfRecords;
        $start = $start == null ? 0 : $start;
        $results = $this->leftjoin('locations', 'hotels.location', '=', 'locations.id')->where('status','1')->skip($start)->take($take)->get(); 
        if(count($results) > 0){
            foreach($results as &$result) 
            { 
                $result['location'] = [
                    'city' => $result['city'], 
                    'state' => $result['state'], 
                    'country' => $result['country'],
                    'zipcode' => $result['zipcode'], 
                    'address' => $result['address']
                ]; 
                unset($result['city'], $result['state'],$result['country'], $result['zipcode'], $result['address']);
            }
            $res = array (
                "success"=>true,
                "message"=>"Hotel listing generated successfully",
                "code"=> '',
                 "data"=>$results
            );
        
        }else{
                $res = array (
                    "success"=>false,
                    "message"=>"No Hotels found",
                    "code"=> 404,
                    "data"=>array()
                );
        }  
            
        return $res; 

         
    }

    public function getDetails($id){
        $results = $this->leftjoin('locations', 'hotels.location', '=', 'locations.id')->where('status','1')->where('hotels.id',$id)->get(); 
       
        if(count($results) > 0){
            foreach($results as &$result) 
            { 
                $result['location'] = [
                    'city' => $result['city'], 
                    'state' => $result['state'], 
                    'country' => $result['country'],
                    'zipcode' => $result['zipcode'], 
                    'address' => $result['address']
                ]; 
           
                unset($result['city'], $result['state'],$result['country'], $result['zipcode'], $result['address']);
            } 
                $res = array (
                    "success"=>true,
                    "message"=>"Hotel found successfully",
                    "code"=> '',
                     "data"=>$result
                );
            
        }else{
                $res = array (
                    "success"=>false,
                    "message"=>"Invalid ID or ID does not exist",
                    "code"=> 404,
                    "data"=>array()
                );
        }  
            
     return $res; 
    }


    public function hotelier_list($auth_token ,$noOfRecords,$start){
        
        $take = $noOfRecords == 0 ? Hotelier::get()->count(): $noOfRecords;
        $start = $start == null ? 0 : $start;
        $hotelier = Hotelier::where('auth_token',$auth_token)->first();
        $results = $this->where('hotelier_id',$hotelier->id)->leftjoin('locations', 'hotels.location', '=', 'locations.id')->where('status','1')->skip($start)->take($take)->get(); 
        if(count($results) > 0){
            foreach($results as &$result) 
            { 
                $result['location'] = [
                    'city' => $result['city'], 
                    'state' => $result['state'], 
                    'country' => $result['country'],
                    'zipcode' => $result['zipcode'], 
                    'address' => $result['address']
                ]; 
                unset($result['city'], $result['state'],$result['country'], $result['zipcode'], $result['address']);
            }
            $res = array (
                "success"=>true,
                "message"=>"Hotel listing generated successfully",
                "code"=> '',
                 "data"=>$results
            );
        
        }else{
                $res = array (
                    "success"=>false,
                    "message"=>"No Hotels found",
                    "code"=> 404,
                    "data"=>array()
                );
        }  
            
        return $res; 
    }

    public function createHotel($request){
        $auth_token = $request->auth_token;
        if($auth_token == null){
            $res = array (
                "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                "message"=>'Auth token not provided',
                "detail"=>'To create a hotel in system, you must include Auth token in your request',
                "code"=> 503,
                "data"=>array()
            ); 
            return  Response::json([
                'error' => $res
            ], 503);
        }else{
            $hotelier = new Hotelier();
            $auth_row = Hotelier::where('auth_token',$auth_token)->where('status',1)->first();
            if($auth_row == null){
                $res = array (
                    "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                    "message"=>'Auth token is expired or not found',
                    "detail"=>'The provided Auth token is either expired or not exist, Please check your request params again',
                    "code"=> 503,
                    "data"=>array()
                ); 
                return  Response::json([
                    'error' => $res
                ], 503);
            }
            $hotelier_id = $auth_row->id;
        }

        $validation = Validator::make($request->all(),[ 
            'name' =>  [
                'required','min:10','max:100',
                new HotelName(),
            ],
            'category' =>  [
                'required',
                new categoryName()
            ],
            'location.city' => 'required|regex:/^[\pL\s\-]+$/u|max:50',
            'location.state' => 'required|regex:/^[\pL\s\-]+$/u|max:100',
            'location.country' => 'required|regex:/^[\pL\s\-]+$/u|max:100',
            'location.zipcode' => 'required|numeric|digits:5',
            'location.address' => 'required|max:100',
            'price' => 'required|numeric',
            'availability' => 'required',
            'rating'=>'required|between:0,5|max:5|numeric',
            'image'=>'url'
        ]);

        $errors = $validation->errors();
        
        if(empty($errors->message)){
            $query = "select * from `hotels` where name ='".$request->name."' AND location IN (select id from locations where zipcode = ".$request->location['zipcode'].")";
            $checkHotelExists = DB::select($query);
            if(empty($checkHotelExists)){
                $location = new Location();
                $location->city = $request->location['city'];
                $location->state = $request->location['state'];
                $location->country = $request->location['country'];
                $location->zipcode = $request->location['zipcode'];
                $location->address = $request->location['address'];
                $location->save();

                $hotel = new Hotel();
                $hotel->name = $request->name;
                $hotel->hotelier_id = $hotelier_id;
                $hotel->rating = $request->rating;
                $hotel->category = $request->category;
                $hotel->location = $location->id;
                $hotel->image = $request->image;
                $hotel->price = $request->price;
                $hotel->availability = $request->availability;
                $hotel->save();
                
                if(!$hotel  || !$location){
                    $res = array (
                        "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                        "message"=>'Hotel already exist for specified locations',
                        "detail"=>'',
                        "code"=> 500,
                        "data"=>array()
                    ); 
                    return  Response::json([
                        'error' => $res
                    ], 500); 
                }else{
                    $res = array (
                        "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                        "message"=>'Hotel data inserted successfully',
                        "detail"=> '',
                        "code"=> 200,
                        "data"=>$hotel
                    ); 
                    return  Response::json([
                        'success' => $res
                    ], 200);
                }
            }else{
                $res = array (
                    "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                    "message"=>'Hotel already exist for specified locations',
                    "detail"=>'',
                    "code"=> 406,
                    "data"=>array()
                ); 
                return  Response::json([
                    'error' => $res
                ], 406);
            }

        }else{
            $res = array (
                "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                "message"=>'Your request parameters didn’t validate.',
                "detail"=>$errors,
                "code"=> 400,
                "data"=>array()
            ); 
            return  Response::json([
                'error' => $res
            ], 400);
        }
    }

    public function updateHotelInfo($request){
        $auth_token = $request->auth_token;
        if($auth_token == null){
            $res = array (
                "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                "message"=>'Auth token not provided',
                "detail"=>'To update a hotel in system, you must include Auth token in your request',
                "code"=> 503,
                "data"=>array()
            ); 
            return  Response::json([
                'error' => $res
            ], 503);
        }else{
            $hotelier = new Hotelier();
            $auth_row = Hotelier::where('auth_token',$auth_token)->where('status',1)->first();
            if($auth_row == null){
                $res = array (
                    "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                    "message"=>'Auth token is expired or not found',
                    "detail"=>'The provided Auth token is either expired or not exist, Please check your request params again',
                    "code"=> 503,
                    "data"=>array()
                ); 
                return  Response::json([
                    'error' => $res
                ], 503);
            }else{
                $checkHotelIdExist = Hotel::where('id',$request->id)->where('hotelier_id',$auth_row->id)->get();
                
                if($checkHotelIdExist->isEmpty()){
                    $res = array (
                        "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                        "message"=>'Hotel does not exists',
                        "detail"=>'The hotel you trying to update is either not exists or auth token is not correct, Please check your request params again',
                        "code"=> 400,
                        "data"=>array()
                    ); 
                    return  Response::json([
                        'error' => $res
                    ], 400);
                }else{
                    if($checkHotelIdExist[0]->status == 0){
                        $res = array (
                            "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                            "message"=>'Hotel is inactive',
                            "detail"=>'The hotel you trying to update is inactive, Please contact support',
                            "code"=> 503,
                            "data"=>array()
                        ); 
                        return  Response::json([
                            'error' => $res
                        ], 503);
                    }
                }
            }

            $hotelier_id = $auth_row->id;
        }



        $validation = Validator::make($request->all(),[ 
            'name' =>  [
                'required','min:10','max:100',
                new HotelName(),
            ],
            'category' =>  [
                'required',
                new categoryName()
            ],
            'location.city' => 'required|regex:/^[\pL\s\-]+$/u|max:50',
            'location.state' => 'required|regex:/^[\pL\s\-]+$/u|max:100',
            'location.country' => 'required|regex:/^[\pL\s\-]+$/u|max:100',
            'location.zipcode' => 'required|numeric|digits:5',
            'location.address' => 'required|max:100',
            'price' => 'required|numeric',
            'availability' => 'required',
            'rating'=>'required|between:0,5|max:5|numeric',
            'image'=>'url'
        ]);

        $errors = $validation->errors();
        
        if(empty($errors->message)){
            $query = Hotel::where('id',$request->id)->first(); 
            if($query){
                if($request->location != null){ 
                $location = Location::where('id',$query->location)->first();
                $location->city = $request->location['city'];
                $location->state = $request->location['state'];
                $location->country = $request->location['country'];
                $location->zipcode = $request->location['zipcode'];
                $location->address = $request->location['address'];
                $location->save();
                }
 
                $query->name = $request->name;
                $query->category = $request->category;
                $query->image = $request->image;
                $query->price = $request->price;
                $query->availability = $request->availability;
                $query->save();
                
                if(!$query){
                    $res = array (
                        "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                        "message"=>'Error in updating data',
                        "detail"=>'',
                        "code"=> 500,
                        "data"=>array()
                    ); 
                    return  Response::json([
                        'error' => $res
                    ], 500); 
                }else{
                    $res = array (
                        "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                        "message"=>'Hotel data updated successfully',
                        "detail"=> '',
                        "code"=> 200,
                        "data"=>$query
                    ); 
                    return  Response::json([
                        'success' => $res
                    ], 200);
                }
            }
        }else{
            $res = array (
                "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                "message"=>'Your request parameters didn’t validate.',
                "detail"=>$errors,
                "code"=> 400,
                "data"=>array()
            ); 
            return  Response::json([
                'error' => $res
            ], 400);
        }
    }

    public function deleteHotel($request){
        
            $auth_row = Hotelier::where('auth_token',$request->auth_token)->where('status',1)->first();
            if($auth_row == null){
                $res = array (
                    "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                    "message"=>'Auth token is expired or not found',
                    "detail"=>'The provided Auth token is either expired or not exist, Please check your request params again',
                    "code"=> 503,
                    "data"=>array()
                ); 
                return  Response::json([
                    'error' => $res
                ], 503);
            }else{
                $checkHotelIdExist = Hotel::where('id',$request->id)->where('hotelier_id',$auth_row->id)->get();
                if($checkHotelIdExist->isEmpty()){
                    $res = array (
                        "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                        "message"=>'Hotel does not exists',
                        "detail"=>'The hotel you trying to delete is either not exists or auth token is not correct, Please check your request params again',
                        "code"=> 400,
                        "data"=>array()
                    ); 
                    return  Response::json([
                        'error' => $res
                    ], 400);
                }else{
                    $query=Hotel::where('id',$request->id)->delete();
                    if(!$query){
                        $res = array (
                            "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                            "message"=>'Error in deleting Hotel',
                            "detail"=>'',
                            "code"=> 500,
                            "data"=>array()
                        ); 
                        return  Response::json([
                            'error' => $res
                        ], 500); 
                    }else{
                        $res = array (
                            "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                            "message"=>'Hotel data deleted successfully',
                            "detail"=> '',
                            "code"=> 200,
                            "data"=>$query
                        ); 
                        return  Response::json([
                            'success' => $res
                        ], 200);
                    }
                
                }
            }
     }

     public function bookHotel($request)
     {
                $checkHotelIdExist = Hotel::where('id',$request->id)->get();
                 
                if($checkHotelIdExist->isEmpty() == true){
                    $res = array (
                        "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                        "message"=>'Hotel does not exists',
                        "detail"=>'The hotel you trying to book is not exists, Please check your request params again',
                        "code"=> 400,
                        "data"=>array()
                    ); 
                    return  Response::json([
                        'error' => $res
                    ], 400);
                }else{
                    if($checkHotelIdExist[0]->status == 0){
                        $res = array (
                            "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                            "message"=>'Hotel is inactive',
                            "detail"=>'The hotel you trying to update is inactive, Please contact support',
                            "code"=> 503,
                            "data"=>array()
                        ); 
                        return  Response::json([
                            'error' => $res
                        ], 503);
                    }
                }
                $availableBooking = $checkHotelIdExist[0]->availability - $request->noOfBooking;
                if($availableBooking >= 0 ){
                    $checkHotelIdExist[0]->availability = $availableBooking;
                    $checkHotelIdExist[0]->save();
                    $res = array (
                        "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                        "message"=>'Hotel Booking done successfully',
                        "detail"=> '',
                        "code"=> 200,
                        "data"=>$checkHotelIdExist
                    ); 
                    return  Response::json([
                        'success' => $res
                    ], 200);

                }else{
                    $res = array (
                        "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                        "message"=>'Booking is not available',
                        "detail"=>'Booking for this hotel is full, Please try another hotel',
                        "code"=> 503,
                        "data"=>array()
                    ); 
                    return  Response::json([
                        'error' => $res
                    ], 503);
                } 
     }

}
