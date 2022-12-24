<?php

namespace App\PaymentMethod;

interface PaymentMethod
{
    public function getPaymentInfo(): array;
}
