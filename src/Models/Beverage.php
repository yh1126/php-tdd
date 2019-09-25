<?php

namespace App\Models;

use App\Models\Item;

class Beverage extends Item
{
    private $name;

    const LIST = [
        'キリン生茶555mlペットボトル' => [
            'tax_exclude_price' => 140
        ]
    ];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isReducedTaxRate(): bool
    {
        return true;
    }

    public function excludeTaxPrice(): int
    {
        return self::LIST[$this->name]['tax_exclude_price'];
    }
}