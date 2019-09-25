<?php

namespace App\Models;

class Item
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isReducedTaxRate()
    {
        if ($this->name === 'キリンチューハイ氷結グレープフルーツ350ml缶') {
            return false;
        }

        if ($this->name === '新ルルA錠s50錠') {
            return false;
        }

        return true;
    }
}
