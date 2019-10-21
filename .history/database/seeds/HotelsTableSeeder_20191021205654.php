<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    }

    public function getCategory(){
        $arrX = array('hotel', 'alternative', 'hostel', 'lodge', 'resort', 'guest-house');

        return array_rand($arrX);
    }

    public function getRating(){
         return rand(0,5);
    }

    public function getReputation(){
        return rand(0,5);
    }

    public function getAvailability(){
        return rand(015);
    }

   public function getReputationBadge($reputation){
    switch ($reputation) {
        case ($reputation <= 500):
            return 'red';
            break;
            
        case ($reputation >= 501 && $reputation <= 799):
            return 'yellow';
            break;     
        
        case ($reputation >= 800):
            return 'green';
            break;         
        
        default:
        return 'green';
            break;
    }
    }

    public function getPrice(){
        return rand(0,1500);
    }

   
}
