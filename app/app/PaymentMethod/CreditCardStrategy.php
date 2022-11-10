<?php

namespace App\PaymentMethod;

class CreditCardStrategy implements PaymentMethod
{
    public function pay(): string
    {
        return 'credit card';
    }
}
