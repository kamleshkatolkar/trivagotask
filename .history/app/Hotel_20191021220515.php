<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    //
    
    public function list(){
        $results = $this->table('hotels')
        ->leftJoin('locations', 'hotels.location', '=', 'locations.id')
        -->where('status','1')->skip(0)->take(10)
        ->get(); 

foreach($results as &$result) 
{ 
    $result['comment'] = [
        'id' => $result['comment_id'], 
        'comment' => $result['comment'], 
        'comment_author' => $result['comment_author']
    ]; 
    unset($result['comment_author'], $result['comment_id']);
}

        return $this->leftjoin('locations', 'hotels.location', '=', 'locations.id')->where('status','1')->skip(0)->take(10)->get(); 
    }
}
