<?php

namespace App\FactoryMethod\PizzaStore;

use App\FactoryMethod\Pizza\ChicagoCheesePizza;
use App\FactoryMethod\Pizza\ChicagoClamPizza;
use App\FactoryMethod\Pizza\Pizza;

class ChicagoPizzaStore extends PizzaStore
{
    /**
     * シカゴスタイルのピザをインスタンス化する
     *
     * @param string $type
     * @return Pizza|null
     */
    public function createPizza(string $type): ?Pizza
    {
        $pizza = null;

        if ($type === 'チーズ') {
            $pizza = new ChicagoCheesePizza();
        } elseif ($type === 'クラム') {
            $pizza = new ChicagoClamPizza();
        }

        return $pizza;
    }
}
