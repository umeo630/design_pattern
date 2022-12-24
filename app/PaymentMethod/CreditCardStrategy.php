<?php

namespace App\PaymentMethod;

class CreditCardStrategy extends AbstractPaymentStrategy
{
    public function getPaymentMethod(): string
    {
        return 'credit card';
    }

    public function getUsageLimit(): string
    {
        return '¥1,000,000';
    }
}
