<?php

namespace App\Console\Commands;

use App\CoffeeShop\BlendCoffee;
use App\CoffeeShop\Drink;
use App\CoffeeShop\Espresso;
use App\CoffeeShop\MochaDecorator;
use App\CoffeeShop\SoyDecorator;
use App\CoffeeShop\WhipDecorator;
use Illuminate\Console\Command;

class CoffeeShopCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coffeeShop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'コーヒーショップの注文内容を出力します。';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // エスプレッソにモカをトッピング
        $drink = new MochaDecorator(new Espresso());

        $this->displayInfo($drink);

        // ブレンドコーヒーにホイップ、豆乳をトッピング
        $drink2 = new SoyDecorator(new WhipDecorator(new BlendCoffee()));

        $this->displayInfo($drink2);

        return Command::SUCCESS;
    }

    public function displayInfo(Drink $drink)
    {
        $this->info($drink->getDescription() . ":" . number_format($drink->getCost()) . "円");
    }
}
