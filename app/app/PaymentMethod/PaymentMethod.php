<?php

namespace App\PaymentMethod;

interface PaymentMethod
{
    public function pay(): string;
}
