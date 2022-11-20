<?php

namespace App\PaymentMethod;

class GooglePayStrategy implements PaymentMethod
{
    public function getPaymentMethod(): string
    {
        return 'google pay';
    }

    public function getUsageLimit(): string
    {
        return '¥100,000';
    }
}
