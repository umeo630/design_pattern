<?php

namespace App\Console\Commands;

use App\FactoryMethod\PizzaStore\NYPizzaStore;
use Illuminate\Console\Command;

class FactoryMethodCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'factoryMethod';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // ニューヨーク
        $nyStore = new NYPizzaStore();
        $nyStore->orderPizza('チーズ');
        $nyStore->orderPizza('クラム');
    }
}
