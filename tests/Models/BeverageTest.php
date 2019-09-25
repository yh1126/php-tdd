<?php

namespace Tests\Models;

use App\Models\Beverage;
use Tests\TestCase;

class BeverageTest extends TestCase
{
    /** @test */
    public function 軽減税率対象である()
    {
        $this->assertTrue((new Beverage($name = 'キリン生茶555mlペットボトル'))->isReducedTaxRate());
    }

    /** @test */
    public function キリン生茶555mlペットボトルの税抜価格が取得できる()
    {
        $this->assertEquals(140, (new Beverage($name = 'キリン生茶555mlペットボトル'))->excludeTaxPrice());
    }

    /** @test */
    public function オロナミンCの税抜価格が取得できる()
    {
        $this->assertEquals(105, (new Beverage($name = 'オロナミンC'))->excludeTaxPrice());
    }

    /** @test */
    public function キリン生茶555mlペットボトルの税込価格が取得できる()
    {
        $this->assertEquals(151, (new Beverage($name = 'キリン生茶555mlペットボトル'))->includeTaxPrice());
    }
}
