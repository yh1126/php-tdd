<?php

namespace Tests\Models;

use App\Models\Drug;
use Tests\TestCase;

class DrugTest extends TestCase
{
    /** @test */
    public function 軽減税率対象でない()
    {
        $this->assertFalse((new Drug($name= '新ルルA錠s50錠'))->isReducedTaxRate());
    }

    /** @test */
    public function 新ルルA錠s50錠の税抜価格が取得できる()
    {
        $this->assertEquals(871, (new Drug($name = '新ルルA錠s50錠'))->excludeTaxPrice());
    }

    /** @test */
    public function 新ルルA錠s50錠の税込価格が取得できる()
    {
        $this->assertEquals(958, (new Drug($name = '新ルルA錠s50錠'))->includeTaxPrice());
    }
}
