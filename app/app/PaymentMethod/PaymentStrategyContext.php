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
            default => throw new \InvalidArgumentException('credit, apple, googleのいずれかを入力してください。'),
        };
    }

    public function getPaymentMethod()
    {
        return $this->strategy->getPaymentMethod();
    }

    public function getUsageLimit()
    {
        return $this->strategy->getUsageLimit();
    }
}
