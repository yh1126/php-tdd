<?php

namespace Tests\Models;

use App\Models\Drug;
use Tests\TestCase;

class DrugTest extends TestCase
{
    /** @test */
    public function 軽減税率対象でない()
    {
        $this->assertFalse((new Drug)->isReducedTaxRate());
    }
}
