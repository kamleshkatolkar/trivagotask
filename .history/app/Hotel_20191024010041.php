<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Rules\HotelName;
use App\Rules\CategoryName;

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
                "error_code"=> '',
                 "data"=>$results
            );
        
        }else{
                $res = array (
                    "success"=>false,
                    "message"=>"No Hotels found",
                    "error_code"=> 404,
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
                    "error_code"=> '',
                     "data"=>$result
                );
            
        }else{
                $res = array (
                    "success"=>false,
                    "message"=>"Invalid ID or ID does not exist",
                    "error_code"=> 404,
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
                "error_code"=> '',
                 "data"=>$results
            );
        
        }else{
                $res = array (
                    "success"=>false,
                    "message"=>"No Hotels found",
                    "error_code"=> 404,
                    "data"=>array()
                );
        }  
            
        return $res; 
    }

    public function createHotel($request){

        $auth_token = $request->auth_token;
        if($auth_token == null){
            $res = array( 'error'=>array (
                "type"=>'https://www.computerhope.com/jargon/u/unauacce.htm',
                "message"=>'Auth token not provided',
                "detail"=>'To create a hotel in system, you must include Auth token in your request',
                "error_code"=> 503,
                "data"=>array()
            )
            ); 
            return  Response::json([
                'hello' => $value
            ], 201);
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

        $res = array (
            "success"=>false,
            "message"=>$errors,
            "error_code"=> 400,
            "data"=>array()
        ); 

        return $res;
    }
}
