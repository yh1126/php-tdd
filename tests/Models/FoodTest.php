<?php

namespace Tests\Models;

use App\Models\Food;
use Tests\TestCase;

class FoodTest extends TestCase
{
    /** @test */
    public function 軽減税率の対象である()
    {
        $this->assertTrue((new Food($name = '手巻直火焼き紅しゃけ'))->isReducedTaxRate());
    }

    /** @test */
    public function 手巻直火焼き紅しゃけの税抜き価格が取得できる()
    {
        $this->assertEquals(139, (new Food($name = '手巻直火焼き紅しゃけ'))->excludeTaxPrice());
    }

    /** @test */
    public function 大きなおむすびマヨネーズの税抜き価格が取得できる()
    {
        $this->assertEquals(186, (new Food($name = '大きなおむすびマヨネーズ'))->excludeTaxPrice());
    }

    /** @test */
    public function 手巻直火焼き紅しゃけの税込価格が取得できる()
    {
        $this->assertEquals(150, (new Food($name = '手巻直火焼き紅しゃけ'))->includeTaxPrice());
    }
}
