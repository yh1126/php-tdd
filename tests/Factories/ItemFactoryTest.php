<?php

namespace Tests\Factories;

use App\Factories\ItemFactory;
use App\Models\Beverage;
use App\Models\Food;
use App\Models\Lequor;
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

    /** @test */
    public function キリンチューハイ氷結グレープフルーツ350ml缶を渡すとliquorクラスが返ってくる()
    {
        $this->assertInstanceOf(Lequor::class, ItemFactory::create($name = 'キリンチューハイ氷結グレープフルーツ350ml缶'));
    }
}
