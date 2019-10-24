<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TrivagoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateHotel()
    {
        $data =  [ 
            "name"=> "Skyna Luanda latestt",
            "rating"=>4,
            "category"=> "Hotel",
            "location"=> [
                "city"=> "Sioux-Falls",
                "state"=>"South Dakota",
                "country"=>"United States",
                "zipcode"=>65124,
                "address"=>"9026 Grasskamp Hill"
            ],
            "image"=> "https://robohash.org/vitaeconsequaturmaxime.jpg",
            "price"=>316,
            "availability"=> 2,
            "auth_token"=>"5db01cbd424a2983cbae587a"
        ];

        $response = $this->json('POST', '/api/hotels/create/',$data);
        $response->assertStatus(200);
    }
}
