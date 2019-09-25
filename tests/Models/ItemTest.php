<?php

namespace Tests\Models;

use Tests\TestCase;
use App\Models\Item;

class ItemTest extends TestCase
{
    /** @test */
    public function 手巻直火焼き紅しゃけは軽減税率対象である()
    {
        $this->assertTrue((new Item($name = '手巻直火焼き紅しゃけ'))->isReducedTaxRate());
    }

    /** @test */
    public function 大きなおむすびマヨネーズは軽減税率対象である()
    {
        $this->assertTrue((new Item($name = '大きなおむすびマヨネーズ'))->isReducedTaxRate());
    }

    /** @test */
    public function キリン生茶555mlペットボトルは軽減税率対象である()
    {
        $this->assertTrue((new Item($name = 'キリン生茶555mlペットボトル'))->isReducedTaxRate());
    }

    /** @test */
    public function キリンチューハイ氷結グレープフルーツ350ml缶は軽減税率対象でない()
    {
        $this->assertFalse((new Item($item_name = 'キリンチューハイ氷結グレープフルーツ350ml缶'))->isReducedTaxRate());
    }

    /** @test */
    public function 新ルルA錠s50錠は軽減税率対象でない()
    {
        $this->assertFalse((new Item($item_name = '新ルルA錠s50錠'))->isReducedTaxRate());
    }

    /** @test */
    public function リポビタンDは軽減税率対象でない()
    {
        $this->assertFalse((new Item($name = 'リポビタンD'))->isReducedTaxRate());
    }
}
