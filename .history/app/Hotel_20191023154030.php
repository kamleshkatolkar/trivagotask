<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        $results = $this->leftjoin('locations', 'hotels.location', '=', 'locations.id')->where('status','1')->where('`hotels`.`id`',$id)->get(); 
       
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
}
