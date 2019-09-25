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

    /** @test */
    public function 手巻直火焼き紅しゃけの税抜き価格が取得できる()
    {
        $this->assertEquals(139, (new Food())->tax_exclude_price);
    }
}
