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
    protected $description = '使用される決済方法と利用上限を表示します。';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $strategyContext = new PaymentStrategyContext($this->argument('paymentMethod'));

        $info = $strategyContext->getPaymentInfo();

        foreach ($info as $key => $value) {
            $this->info($key . ":" . $value);
        }

        return Command::SUCCESS;
    }
}
