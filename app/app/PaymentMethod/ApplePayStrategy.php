<?php

namespace App\PaymentMethod;

class ApplePayStrategy implements PaymentMethod
{
    public function getPaymentMethod(): string
    {
        return 'apple pay';
    }

    public function getUsageLimit(): string
    {
        return '¥50,000';
    }
}
