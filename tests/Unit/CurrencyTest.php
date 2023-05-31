<?php

namespace Tests\Unit;

use App\Models\Master\Currency;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_new_currency()
    {
        Currency::create([
            "name_ar"   => "يورو",
            "name" => "Euro",
            "code"   => "EUR"
        ]);
        $this->assertTrue(true);
    }
}
