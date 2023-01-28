<?php

namespace App\CoffeeShop;

/**
 * デコレータ用の抽象クラス
 * Drinkと交換可能にするためDrinkインターフェースを実装
 */
abstract class ToppingDecorator implements Drink
{
    // 各デコレーターがラップするDrink
    protected $drink;

    public function __construct(Drink $drink)
    {
        $this->drink = $drink;
    }
}
