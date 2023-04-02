<?php

namespace App\FactoryMethod\Pizza;

class ChicagoClamPizza extends Pizza
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
        $this->name = 'クラムピザ(シカゴスタイル)';
        $this->dough = '極厚クラスと生地';
        $this->sauce = 'シカゴ用ソース';
        $this->toppings = ['フレッシュな貝'];
    }

    public function cut(): void
    {
        echo "{$this->name}を四角形にカットする\n";
    }
}
