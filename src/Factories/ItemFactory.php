<?php

namespace App\Factories;

use App\Models\Beverage;
use App\Models\Drug;
use App\Models\Food;
use App\Models\Lequor;
use App\Models\QuasiDrug;

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

        if ($name == '新ルルA錠s50錠') {
            return new Drug();
        }

        if ($name === 'リポビタンD') {
            return new QuasiDrug();
        }

        return new Food();
    }
}
