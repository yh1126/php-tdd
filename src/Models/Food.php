<?php

namespace App\Models;

use App\Models\Item;

class Food extends Item
{
    private $tax_exclude_price;

    public function __construct()
    {
        $this->tax_exclude_price = 139;
    }

    public function isReducedTaxRate(): bool
    {
        return true;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
