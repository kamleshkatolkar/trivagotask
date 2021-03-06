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
    public function CreateHotel()
    {
        $data = [
            'name' => "New Product",
            'description' => "This is a product",
            'units' => 20,
            'price' => 10,
            'image' => "https://images.pexels.com/photos/1000084/pexels-photo-1000084.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                   ];

$response = $this->json('POST', '/api/products',$data);
$response->assertStatus(401);
$response->assertJson(['message' => "Unauthenticated."]);
    }
}
