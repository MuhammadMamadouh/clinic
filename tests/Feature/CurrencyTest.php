<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CurrencyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_add_currency()
    {
        $user = User::find(1);
        
        $token = "1|a6yiLjc6qZhVu0WXvEwJqleNFkx4EkQSdtoqmIno";
        $response = $this->withHeaders([
            "Accept" => "application/json",
            "Authorization" => "Bearer " .  $token
        ])->post('/api/master-data/currencies', [

            "name_ar" => "الصلاحيييية",
            "name_en" => "roleddd",
            "code" => "mar"

        ]);

        $response->assertStatus(201);
    }
}
