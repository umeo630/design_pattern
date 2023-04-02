<?php

namespace App\FactoryMethod\Pizza;

class ChicagoClamPizza extends Pizza
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $dough;

    /**
     * @var string
     */
    public string $sauce;

    /**
     * @var array
     */
    public array $toppings;

    public function __construct()
    {
        $this->name = 'クラムピザ(シカゴスタイル)';
        $this->dough = '極厚クラスと生地';
        $this->sauce = 'シカゴ用ソース';
        $this->toppings = ['新鮮な貝'];
    }

    public function cut(): void
    {
        echo "{$this->name}を四角形にカットする\n";
    }
}
