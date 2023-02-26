<?php

namespace App\SimpleFactory\After;

class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'チーズピザ';
        $this->dough = 'レギュラー';
        $this->sauce = 'マリアナソース';
        $this->toppings[] = 'モッツァレラ';
        $this->toppings[] = 'パルメザン';
    }
}
