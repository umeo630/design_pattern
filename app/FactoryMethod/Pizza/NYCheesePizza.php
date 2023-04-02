<?php

namespace App\FactoryMethod\Pizza;

class NYCheesePizza extends Pizza
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
        $this->name = 'チーズピザ(ニューヨークスタイル)';
        $this->dough = '薄いクラスト生地';
        $this->sauce = 'ニューヨーク用ソース';
        $this->toppings = ['ゴルゴンゾーラチーズ', 'オリーブオイル'];
    }
}
