<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    //
    
    public function list(){
        #return $this->leftjoin('locations', 'hotels.location', '=', 'locations.id')->where('status','1')->skip(0)->take(10)->get(); 
        return $this->belongsTo('App\Locaion','location');
    }
}
