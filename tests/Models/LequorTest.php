<?php

use App\Models\Lequor;
use Tests\TestCase;

class LequorTest extends TestCase
{
    /** @test */
    public function 軽減税率の対象でない()
    {
        $this->assertFalse((new Lequor())->isReducedTaxRate());
    }
}
