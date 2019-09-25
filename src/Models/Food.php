<?php

namespace App\Models;

use App\Models\Item;

class Food extends Item
{
    private $tax_exclude_price;
    private $tax_price;
    private $name;

    const LIST = [
        '手巻直火焼き紅しゃけ' => [
            'tax_exclude_price' => 139
        ],
        '大きなおむすびマヨネーズ' => [
            'tax_exclude_price' => 186
        ]
    ];

    public function __construct($name)
    {
        $this->name = $name;
        $this->tax_exclude_price = self::LIST[$this->name]['tax_exclude_price'];
        $this->tax_price = $this->tax_exclude_price + intval($this->tax_exclude_price * (8 / 100));
    }

    public function isReducedTaxRate(): bool
    {
        return true;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
