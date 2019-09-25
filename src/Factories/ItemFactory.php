<?php

namespace App\Factories;

use App\Models\Food;

class ItemFactory
{
    public static function create($name)
    {
        return new Food();
    }
}
