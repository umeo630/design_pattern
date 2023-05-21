<?php

namespace Tests\Unit\CofeeShop;

use App\CoffeeShop\BlendCoffee;
use App\CoffeeShop\MochaDecorator;
use App\CoffeeShop\SoyDecorator;
use App\CoffeeShop\WhipDecorator;
use PHPUnit\Framework\TestCase;

class ToppingTest extends TestCase
{
    public function testBlendCoffeeWithMocha()
    {
        $blendCoffee = new BlendCoffee();
        $blendCoffeeWithMocha = new MochaDecorator($blendCoffee);
        $this->assertEquals('ブレンドコーヒー、モカ', $blendCoffeeWithMocha->getDescription());
        $this->assertEquals(250, $blendCoffeeWithMocha->getCost());
    }

    public function testBlendCoffeeWithSoy()
    {
        $blendCoffee = new BlendCoffee();
        $blendCoffeeWithSoy = new SoyDecorator($blendCoffee);
        $this->assertEquals('ブレンドコーヒー、豆乳', $blendCoffeeWithSoy->getDescription());
        $this->assertEquals(300, $blendCoffeeWithSoy->getCost());
    }

    public function testBlendCoffeeWithWhip()
    {
        $blendCoffee = new BlendCoffee();
        $blendCoffeeWithWhip = new WhipDecorator($blendCoffee);
        $this->assertEquals('ブレンドコーヒー、ホイップ', $blendCoffeeWithWhip->getDescription());
        $this->assertEquals(230, $blendCoffeeWithWhip->getCost());
    }

    public function testBlendCoffeeWithMochaAndSoyAndWhip()
    {
        $blendCoffee = new BlendCoffee();
        $blendCoffeeWithMocha = new MochaDecorator($blendCoffee);
        $blendCoffeeWithMochaAndSoy = new SoyDecorator($blendCoffeeWithMocha);
        $blendCoffeeWithMochaAndSoyAndWhip = new WhipDecorator($blendCoffeeWithMochaAndSoy);
        $this->assertEquals('ブレンドコーヒー、モカ、豆乳、ホイップ', $blendCoffeeWithMochaAndSoyAndWhip->getDescription());
        $this->assertEquals(380, $blendCoffeeWithMochaAndSoyAndWhip->getCost());
    }
}
