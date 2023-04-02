<?php

namespace App\FactoryMethod\Pizza;

class ChicagoCheesePizza extends Pizza
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $dough;

    /**
     * @var string
     */
    public $sauce;

    /**
     * @var []
     */
    public $toppings;

    public function __construct()
    {
        $this->name = 'チーズピザ(シカゴスタイル)';
        $this->dough = '極厚クラスト生地';
        $this->sauce = 'シカゴ用ソース';
        $this->toppings = ['モツァレラチーズ', 'はちみつ'];
    }

    public function cut(): void
    {
        echo "{$this->name}を四角形にカットする\n";
    }
}
