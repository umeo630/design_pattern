<?php

namespace App\PaymentMethod;

class PaymentStrategyContext
{
    private PaymentMethod $strategy;

    public function __construct(string $paymentMethod)
    {
        $this->strategy = match ($paymentMethod) {
            'credit' => new CreditCardStrategy(),
            'apple' => new ApplePayStrategy(),
            'google' => new GooglePayStrategy(),
            default => throw new \InvalidArgumentException('You must pass in either credit, apple, or google as the payment method.'),
        };
    }

    public function pay()
    {
        return $this->strategy->pay();
    }
}
