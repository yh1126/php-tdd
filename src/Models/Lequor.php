<?php

namespace App\Models;

use App\Models\Item;

class Lequor extends Item
{
    public function isReducedTaxRate(): bool
    {
        return false;
    }
}
