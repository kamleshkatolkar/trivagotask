<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    //
    function location(){
        return $this->hasOne('\App\Location');
    }
    public function list(){
        return $this->hasOne('\App\Location')->where('status','1')->skip(0)->take(10)->get(); 
    }
}
