<?php

namespace Tests\Models;

use App\Models\Food;
use Tests\TestCase;

class FoodTest extends TestCase
{
    /** @test */
    public function 軽減税率の対象である()
    {
        $this->assertTrue((new Food())->isReducedTaxRate());
    }
}
