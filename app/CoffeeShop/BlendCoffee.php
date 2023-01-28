<?php

namespace App\CoffeeShop;

class BlendCoffee implements Drink
{
    public function getDescription(): string
    {
        return "ブレンドコーヒー";
    }

    public function getCost(): int
    {
        return 200;
    }
}
