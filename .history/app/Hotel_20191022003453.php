<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    //
    
    public function list($noOfRecords,$start){
        
        $take = $noOfRecords == 0 ? Hotel::get()->count(): $noOfRecords;
        $start = $start == null ? 0 : $start;
        $results = $this->leftjoin('locations', 'hotels.location', '=', 'locations.id')->where('status','1')->skip($start)->take($take)->get(); 

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

        return  Response::json(['result' => $result],200);
    }

    public function getDetails($id){
        $results = $this->where('status','1')->where('id',$id)->get(); 
        if($results != null){
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
                $res = array (
                    "success"=>true,
                    "message"=>"Hotel found successfully",
                    "error_code"=> 200,
                     "data"=>$result
                );
            }
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
}
