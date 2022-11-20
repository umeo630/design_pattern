<?php

namespace App\PaymentMethod;

interface PaymentMethod
{
    public function getPaymentMethod(): string;

    public function getUsageLimit(): string;
}
