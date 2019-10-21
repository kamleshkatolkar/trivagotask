<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    //

    public function list(){
        return DB::table('hotels')->where('status','1')->get(); 
    }
}
