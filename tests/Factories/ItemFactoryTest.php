<?php

namespace Tests\Factories;

use App\Factories\ItemFactory;
use App\Models\Food;
use App\Models\Beverage;
use Tests\TestCase;

class ItemFactoryTest extends TestCase
{
    /** @test */
    public function 手巻直火焼き紅しゃけを渡すとfoodクラスが返ってくる()
    {
        $this->assertInstanceOf(Food::class, ItemFactory::create($name = '手巻直火焼き紅しゃけ'));
    }

    /** @test */
    public function キリン生茶555mlペットボトルを渡すとbeverageクラスが返ってくる()
    {
        $this->assertInstanceOf(Beverage::class, ItemFactory::create($name = 'キリン生茶555mlペットボトル'));
    }
}
