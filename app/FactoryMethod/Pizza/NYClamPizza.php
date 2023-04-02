<?php

namespace App\FactoryMethod\Pizza;

class NYClamPizza extends Pizza
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
        $this->name = 'クラムピザ(ニューヨークスタイル)';
        $this->dough = '薄いクラスト生地';
        $this->sauce = 'ニューヨーク用ソース';
        $this->toppings = ['貝'];
    }
}
