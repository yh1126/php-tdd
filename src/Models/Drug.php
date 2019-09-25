<?php

namespace App\Models;

use App\Models\Item;

class Drug extends Item
{
    public function isReducedTaxRate(): bool
    {
        return false;
    }
}
