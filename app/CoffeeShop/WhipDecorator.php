<?php

namespace App\CoffeeShop;

class WhipDecorator extends ToppingDecorator
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
