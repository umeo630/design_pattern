<?php

namespace App\CoffeeShop;

class Espresso implements Drink
{
    public function getDescription(): string
    {
        return "エスプレッソ";
    }

    public function getCost(): int
    {
        return 250;
    }
}
