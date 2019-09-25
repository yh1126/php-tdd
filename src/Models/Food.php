<?php

namespace App\Models;

use App\Models\Item;

class Food extends Item
{
    private $name;

    const LIST = [
        '手巻直火焼き紅しゃけ' => [
            'tax_exclude_price' => 139
        ],
        '大きなおむすびマヨネーズ' => [
            'tax_exclude_price' => 186
        ],
        'からあげ棒' => [
            'tax_exclude_price' => 114
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

    public function excludeTaxPrice()
    {
        return self::LIST[$this->name]['tax_exclude_price'];
    }

    public function includeTaxPrice()
    {
        return $this->excludeTaxPrice() + intval($this->excludeTaxPrice() * (8 / 100));
    }
}
