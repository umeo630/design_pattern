<?php

namespace App\SimpleFactory\After;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'ペパロニピザ';
        $this->dough = '厚め';
        $this->sauce = 'トマトソース';
        $this->toppings[] = 'モッツァレラ';
        $this->toppings[] = 'パルメザン';
        $this->toppings[] = 'ペパロニ';
    }
}
