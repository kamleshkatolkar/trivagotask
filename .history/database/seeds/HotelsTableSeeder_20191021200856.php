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
        factory(App\Hotels::class, 10)->create();
    }

    public function getCategory(){
        $arrX = array("Kay", "Joe","Susan", "Frank");

        return array_rand($arrX);
    }
}
