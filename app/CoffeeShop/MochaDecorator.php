<?php

namespace App\CoffeeShop;

class MochaDecorator extends ToppingDecorator
{
    public function getDescription(): string
    {
        return $this->drink->getDescription() . "、モカ";
    }

    public function getCost(): int
    {
        return $this->drink->getCost() + 50;
    }
}
