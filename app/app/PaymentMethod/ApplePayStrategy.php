<?php

namespace App\PaymentMethod;

class ApplePayStrategy implements PaymentMethod
{
    public function pay(): string
    {
        return 'apple pay';
    }
}
