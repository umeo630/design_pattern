<?php

namespace Tests\Unit\CofeeShop;

use App\CoffeeShop\BlendCoffee;
use App\CoffeeShop\Espresso;
use PHPUnit\Framework\TestCase;

class DrinkTest extends TestCase
{
    public function testBlendCoffee()
    {
        $blendCoffee = new BlendCoffee();
        $this->assertEquals('ブレンドコーヒー', $blendCoffee->getDescription());
        $this->assertEquals(200, $blendCoffee->getCost());
    }

    public function testEspresso()
    {
        $espresso = new Espresso();
        $this->assertEquals('エスプレッソ', $espresso->getDescription());
        $this->assertEquals(250, $espresso->getCost());
    }
}
