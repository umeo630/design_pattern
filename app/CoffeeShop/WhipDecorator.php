<?php

namespace App\CoffeeShop;

class WhipMochaDecorator extends ToppingDecorator
{
    public function getDescription(): string
    {
        return $this->drink->getDescription() . "、ホイップ";
    }

    public function getCost(): int
    {
        return $this->drink->getCost() + 30;
    }
}
