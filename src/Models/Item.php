<?php

namespace App\Models;

abstract class Item
{
    abstract public function isReducedTaxRate(): bool;
}
