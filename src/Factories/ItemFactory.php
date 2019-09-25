<?php

namespace App\Factories;

use App\Models\Beverage;
use App\Models\Food;
use App\Models\Lequor;

class ItemFactory
{
    public static function create($name)
    {
        if ($name === 'キリン生茶555mlペットボトル') {
            return new Beverage();
        }

        if ($name === 'キリンチューハイ氷結グレープフルーツ350ml缶') {
            return new Lequor();
        }
        return new Food();
    }
}
