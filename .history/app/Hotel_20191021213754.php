<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    //
    
    public function list(){
        return $this->join('location', 'hotels.location', '=', 'location.id')->where('status','1')->skip(0)->take(10)->get(); 
    }
}
