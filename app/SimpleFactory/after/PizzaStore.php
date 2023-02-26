<?php

namespace App\SimpleFactory\After;

/**
 * Factoryを使うクライアント
 */
class PizzaStore
{
    /**
     * ピザを作成するFactory
     *
     * @var SimplePizzaFactory
     */
    private SimplePizzaFactory $factory;

    /**
     * コンストラクタ
     *
     * @param SimplePizzaFactory $factory
     */
    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * ピザの注文
     *
     * @param string $type
     * @return Pizza
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->factory->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
