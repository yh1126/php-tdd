<?php

namespace Tests\Models;

use Tests\TestCase;
use App\Models\Item;

class ItemTest extends TestCase
{
    /** @test */
    public function 手巻直火焼き紅しゃけは軽減税率対象である()
    {
        $this->assertTrue((new Item())->isReducedTaxRate());
    }

    /** @test */
    public function 大きなおむすびマヨネーズは軽減税率対象である()
    {
        $this->assertTrue((new Item())->isReducedTaxRate());
    }
}
