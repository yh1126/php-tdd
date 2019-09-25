<?php

namespace App\Models;

use App\Models\Item;

class QuasiDrug extends Item
{
    public function isReducedTaxRate(): bool
    {
        return false;
    }
}
