<?php

class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = null;

        // 将来的にピザの種類が変更される可能性が高い
        // 変更に対して閉じていない→カプセル化すべき
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

        //　変更されない箇所
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}
