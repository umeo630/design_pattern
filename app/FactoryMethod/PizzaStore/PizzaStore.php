<?php

namespace App\FactoryMethod\PizzaStore;

use App\FactoryMethod\Pizza\Pizza;

/**
 * 地域ごとのPizzaStoreサブクラスの抽象クラス
 * 作成方法(createPizza)はサブクラスに任せる
 */
abstract class PizzaStore
{
    /**
     * ピザ注文処理
     * ピザの種類に関係せず、変化しない部分
     *
     * @param string $type
     * @return Pizza
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    /**
     * ピザ作成
     * 具体的な処理はサブクラスごとに異なる
     *
     * @param string $type
     * @return Pizza|null
     */
    abstract public function createPizza(string $type): ?Pizza;
}
