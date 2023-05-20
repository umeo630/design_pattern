<?php

namespace Tests\Unit;

use App\PaymentMethod\ApplePayStrategy;
use App\PaymentMethod\CreditCardStrategy;
use App\PaymentMethod\GooglePayStrategy;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    /**
     * ApplePayテスト
     */
    public function testApplePay()
    {
        $applePay = new ApplePayStrategy();
        $this->assertEquals('apple pay', $applePay->getPaymentMethod());
        $this->assertEquals('¥50,000', $applePay->getUsageLimit());
    }

    /**
     * GooglePayテスト
     */
    public function testGooglePay()
    {
        $googlePay = new GooglePayStrategy();
        $this->assertEquals('google pay', $googlePay->getPaymentMethod());
        $this->assertEquals('¥100,000', $googlePay->getUsageLimit());
    }

    /**
     * クレジットカードテスト
     */
    public function testCreditCard()
    {
        $creditCard = new CreditCardStrategy();
        $this->assertEquals('credit card', $creditCard->getPaymentMethod());
        $this->assertEquals('¥1,000,000', $creditCard->getUsageLimit());
    }
}
