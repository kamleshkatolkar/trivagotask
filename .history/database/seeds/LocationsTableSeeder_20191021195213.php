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
                "city": "Nashville",
                "zipcode": 37215,
                "state": "Tennessee",
                "country": "United States",
                "address": "8767 Hoffman Drive",
                "id": 1
              ],
              [
                "city": "Huntsville",
                "zipcode": 35810,
                "state": "Alabama",
                "country": "United States",
                "address": "95409 Vera Plaza",
                "id": 2
              ],
              [
                "city": "Lubbock",
                "zipcode": 79415,
                "state": "Texas",
                "country": "United States",
                "address": "9204 Pleasure Pass",
                "id": 3
              ],
              [
                "city": "Chicago",
                "zipcode": 60681,
                "state": "Illinois",
                "country": "United States",
                "address": "5885 American Junction",
                "id": 4
              ],
              [
                "city": "Minneapolis",
                "zipcode": 55487,
                "state": "Minnesota",
                "country": "United States",
                "address": "28993 Sheridan Lane",
                "id": 5
              ],
              [
                "city": "Valley Forge",
                "zipcode": 19495,
                "state": "Pennsylvania",
                "country": "United States",
                "address": "959 Mosinee Drive",
                "id": 6
              ],
              [
                "city": "Mobile",
                "zipcode": 36628,
                "state": "Alabama",
                "country": "United States",
                "address": "3989 Crest Line Court",
                "id": 7
              ],
              [
                "city": "Tallahassee",
                "zipcode": 32399,
                "state": "Florida",
                "country": "United States",
                "address": "5 Milwaukee Court",
                "id": 8
              ],
              [
                "city": "Fresno",
                "zipcode": 93786,
                "state": "California",
                "country": "United States",
                "address": "28 Pleasure Road",
                "id": 9
              ],
              [
                "city": "Louisville",
                "zipcode": 40280,
                "state": "Kentucky",
                "country": "United States",
                "address": "1627 Kedzie Parkway",
                "id": 10
              ]
            
        ];
 
        foreach ($channels as $channel)
            DB::table('channels')->insert($channel);
    }
    }
}
