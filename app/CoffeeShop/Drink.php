<?php

namespace App\CoffeeShop;

/**
 * 基底となる飲み物インターフェース
 */
interface Drink
{
    public function getDescription(): string;

    public function getCost(): int;
}
