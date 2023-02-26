<?php

namespace App\SimpleFactory\After;

class ClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'アサリピザ';
        $this->dough = '薄め';
        $this->sauce = 'トマトソース';
        $this->toppings[] = 'モッツァレラ';
        $this->toppings[] = 'パルメザン';
        $this->toppings[] = 'アサリ';
    }
}
