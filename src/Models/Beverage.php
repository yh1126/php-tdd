<?php

namespace App\Models;

use App\Models\Item;

class Beverage extends Item
{
    public function isReducedTaxRate(): bool
    {
        return true;
    }
}