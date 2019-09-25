<?php

namespace App\Factories;

use App\Models\Beverage;
use App\Models\Food;

class ItemFactory
{
    public static function create($name)
    {
        if ($name === 'キリン生茶555mlペットボトル') {
            return new Beverage();
        }
        return new Food();
    }
}
