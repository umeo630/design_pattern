<?php

namespace App\CoffeeShop;

class SoyDecorator extends ToppingDecorator
{
    public function getDescription(): string
    {
        return $this->drink->getDescription() . "、豆乳";
    }

    public function getCost(): int
    {
        return $this->drink->getCost() + 100;
    }
}
