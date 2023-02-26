<?php

namespace App\SimpleFactory\After;

/**
 * Factoryクラス
 */
class SimplePizzaFactory
{
    /**
     * ピザの作成
     *
     * @param string $type
     * @return Pizza
     */
    public function createPizza(string $type): Pizza
    {
        $pizza = null;
        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza();
                break;
            case 'clam':
                $pizza = new ClamPizza();
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza();
                break;
        }

        return $pizza;
    }
}
