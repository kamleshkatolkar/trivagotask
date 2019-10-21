<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
                'name' => 'php',
                'slug' => 'php'
            ],
            [
                'name' => 'laravel',
                'slug' => 'laravel'
            ],
        ];
 
        foreach ($channels as $channel)
            DB::table('channels')->insert($channel);
    }
    }
}
