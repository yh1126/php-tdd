<?php

namespace Tests\Factories;

use App\Factories\ItemFactory;
use App\Models\Food;
use Tests\TestCase;

class ItemFactoryTest extends TestCase
{
    /** @test */
    public function 手巻直火焼き紅しゃけを渡すとfoodクラスが返ってくる()
    {
        $this->assertInstanceOf(Food::class, ItemFactory::create($name = '手巻直火焼き紅しゃけ'));
    }
}
