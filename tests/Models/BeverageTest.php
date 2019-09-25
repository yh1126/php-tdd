<?php

namespace Tests\Models;

use App\Models\Beverage;
use Tests\TestCase;

class BeverageTest extends TestCase
{
    /** @test */
    public function 軽減税率対象である()
    {
        $this->assertTrue((new Beverage())->isReducedTaxRate());
    }
}
