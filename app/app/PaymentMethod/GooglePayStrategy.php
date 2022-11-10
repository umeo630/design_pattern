<?php

namespace App\PaymentMethod;

class GooglePayStrategy implements PaymentMethod
{
    public function pay(): string
    {
        return 'google pay';
    }
}
