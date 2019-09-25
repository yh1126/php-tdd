<?php

namespace App\Models;

abstract class Item
{
    abstract public function isReducedTaxRate(): bool;
    abstract public function excludeTaxPrice(): int;
    abstract public function includeTaxPrice(): int;
}
