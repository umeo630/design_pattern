<?php

namespace App\FactoryMethod\PizzaStore;

use App\FactoryMethod\Pizza\NYCheesePizza;
use App\FactoryMethod\Pizza\NYClamPizza;
use App\FactoryMethod\Pizza\Pizza;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type): ?Pizza
    {
        // ピザインスタンスの生成
        $pizza = null;
        if ($type === 'チーズ') {
            $pizza = new NYCheesePizza();
        } elseif ($type === 'クラム') {
            $pizza = new NYClamPizza();
        }

        return $pizza;
    }
}
