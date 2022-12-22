<?php

namespace App\PaymentMethod;

abstract class AbstractPaymentStrategy implements PaymentMethod
{
    private $info = [];

    public function getPaymentInfo(): array
    {
        $this->info = [
            'method' => $this->getPaymentMethod(),
            'usage_limit'  => $this->getUsageLimit()
        ];

        return $this->info;
    }

    public abstract function getPaymentMethod(): string;

    public abstract function getUsageLimit(): string;
}
