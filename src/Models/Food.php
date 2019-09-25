<?php

namespace App\Models;

use App\Models\Item;

class Food extends Item
{
    public function isReducedTaxRate(): bool
    {
        return true;
    }
}
