<?php

namespace App\CoffeeShop;

/**
 * 基底となるインターフェース
 */
interface Drink
{
    public function getDescription(): string;

    public function getCost(): int;
}
