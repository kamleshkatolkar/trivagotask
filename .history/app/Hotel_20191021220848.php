<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    //
    
    public function list(){
        $results = $this->leftjoin('locations', 'hotels.location', '=', 'locations.id')->where('status','1')->skip(0)->take(10)->get(); 

            foreach($results as &$result) 
            { 
                $result['location'] = [
                    'id' => $result['comment_id'], 
                    'comment' => $result['comment'], 
                    'comment_author' => $result['comment_author']
                ]; 
                unset($result['city'], $result['state'],$result['country'], $result['zipcode'], $result['address']);
            }

        return $this->leftjoin('locations', 'hotels.location', '=', 'locations.id')->where('status','1')->skip(0)->take(10)->get(); 
    }
}
