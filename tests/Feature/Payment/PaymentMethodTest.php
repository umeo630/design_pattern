<?php

namespace Tests\Feature;

use Tests\TestCase;

class PaymentStrategyTest extends TestCase
{
    /**
     * ApplePayのテスト
     *
     * @return void
     */
    public function test_apple_pay()
    {
        $this->artisan('pay apple')
            ->expectsOutputToContain('apple pay')
            ->expectsOutputToContain('¥50,000')
            ->assertSuccessful();
    }

    /**
     * GooglePayのテスト
     *
     * @return void
     */
    public function test_google_pay()
    {
        $this->artisan('pay google')
            ->expectsOutputToContain('google pay')
            ->expectsOutputToContain('¥100,000')
            ->assertSuccessful();
    }

    /**
     * クレジットカードのテスト
     *
     * @return void
     */
    public function test_credit_card()
    {
        $this->artisan('pay credit')
            ->expectsOutputToContain('credit card')
            ->expectsOutputToContain('¥1,000,000')
            ->assertSuccessful();
    }

    /**
     * 入力不備テスト
     *
     * @return void
     */
    public function test_input_other()
    {
        $this->withoutExceptionHandling();
        $this->expectException(\InvalidArgumentException::class);
        $this->artisan('pay other');
    }
}
