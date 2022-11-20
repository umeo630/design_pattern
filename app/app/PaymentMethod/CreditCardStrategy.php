<?php

namespace App\PaymentMethod;

class CreditCardStrategy implements PaymentMethod
{
    public function getPaymentMethod(): string
    {
        return 'credit card';
    }

    public function getUsageLimit(): string
    {
        return '¥1000,000';
    }
}
