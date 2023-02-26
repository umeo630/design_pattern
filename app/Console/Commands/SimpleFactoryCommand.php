<?php

namespace App\Console\Commands;

use App\SimpleFactory\After\PizzaStore;
use App\SimpleFactory\After\SimplePizzaFactory;
use Illuminate\Console\Command;

class SimpleFactoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:simpleFactory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'SimpleFactory出力用コマンド';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // 注文する
        $pizzaStore = new PizzaStore(new SimplePizzaFactory());

        // チーズピザ
        $cheesePizza = $pizzaStore->orderPizza('cheese');
        $cheesePizza->describe();

        // アサリピザ
        $clamPizza = $pizzaStore->orderPizza('clam');
        $clamPizza->describe();

        // ペパロニピザ
        $pepperoniPizza = $pizzaStore->orderPizza('pepperoni');
        $pepperoniPizza->describe();

        return Command::SUCCESS;
    }
}
