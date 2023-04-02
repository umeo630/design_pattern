<?php

namespace App\FactoryMethod\Pizza;


/**
 * ピザの抽象クラス
 */
abstract class Pizza
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

    public function prepare(): void
    {
        echo "{$this->name}を準備する\n";
        echo "生地をこねる...\n";
        echo "ソースを追加...\n";
        echo "トッピングを追加...\n";
        foreach ($this->toppings as $topping) {
            echo "- {$topping}\n";
        }
    }

    public function bake(): void
    {
        echo "{$this->name}を焼く\n";
    }

    public function cut(): void
    {
        echo "{$this->name}をカットする\n";
    }

    public function box(): void
    {
        echo "{$this->name}を箱に入れる\n";
    }
}
