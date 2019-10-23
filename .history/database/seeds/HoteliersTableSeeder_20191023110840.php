<?php

use Illuminate\Database\Seeder;

class HoteliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($hoteliers as $hotelier){
            DB::table('hoteliers')->insert($location);
        }
    }
}
