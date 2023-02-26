<?php

namespace App\SimpleFactory\After;

/**
 * Factoryが作っている商品
 */
abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings;

    public function getName(): string
    {
        return $this->name;
    }

    public function prepare(): void
    {
        echo $this->name . 'の準備' . "\n";
    }

    public function bake(): void
    {
        echo $this->name . 'を焼く' . "\n";
    }

    public function cut(): void
    {
        echo $this->name . 'を切る' . "\n";
    }

    public function box(): void
    {
        echo $this->name . 'を箱に詰める' . "\n";
    }

    public function describe(): void
    {
        echo $this->name . "\n";
        echo '生地:' . $this->dough . "\n";
        echo 'ソース:' . $this->sauce . "\n";
        echo 'トッピング: ' . "\n";
        foreach ($this->toppings as $topping) {
            echo $topping . "\n";
        }
        echo "\n";
    }
}
