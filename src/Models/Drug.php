<?php

namespace App\Models;

use App\Models\Item;

class Drug extends Item
{
    private $name;

    const LIST = [
        '新ルルA錠s50錠' => [
            'tax_exclude_price' => 871
        ]
    ];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isReducedTaxRate(): bool
    {
        return false;
    }

    public function excludeTaxPrice(): int
    {
        return self::LIST[$this->name]['tax_exclude_price'];
    }

    public function includeTaxPrice(): int
    {
        return $this->excludeTaxPrice() + intval($this->excludeTaxPrice() * (10 / 100));
    }
}
