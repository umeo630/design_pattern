<?php

namespace App\Console\Commands;

use App\PaymentMethod\PaymentStrategyContext;
use Illuminate\Console\Command;

class PaymentStrategyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pay {paymentMethod}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display the payment method strategy that is used.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $strategyContext = new PaymentStrategyContext($this->argument('paymentMethod'));

        $this->info($strategyContext->pay());

        return Command::SUCCESS;
    }
}
