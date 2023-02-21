<?php

namespace App\SimpleFactory;

/**
 * Factoryが作っている商品
 */
abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings;

    public function getName(): string
    {
        return $this->name;
    }

    public function prepare(): void
    {
        echo $this->name . 'の準備';
    }

    public function bake(): void
    {
        echo $this->name . 'を焼く';
    }

    public function cut(): void
    {
        echo $this->name . 'を切る';
    }

    public function box(): void
    {
        echo $this->name . 'を箱に詰める';
    }

    public function describe(): void
    {
        echo $this->name . '<br>';
        echo '生地:' . $this->dough . '<br>';
        echo 'ソース:' . $this->sauce . '<br>';
        echo 'トッピング: <br>';
        foreach ($this->toppings as $topping) {
            echo $topping . '<br>';
        }
        echo '<br><br>';
    }
}

class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'チーズピザ';
        $this->dough = 'レギュラー';
        $this->sauce = 'マリアナソース';
        $this->toppings[] = 'モッツァレラ';
        $this->toppings[] = 'パルメザン';
    }
}

class ClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'アサリピザ';
        $this->dough = '薄め';
        $this->sauce = 'トマトソース';
        $this->toppings[] = 'モッツァレラ';
        $this->toppings[] = 'パルメザン';
        $this->toppings[] = 'アサリ';
    }
}

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'ペパロニピザ';
        $this->dough = '厚め';
        $this->sauce = 'トマトソース';
        $this->toppings[] = 'モッツァレラ';
        $this->toppings[] = 'パルメザン';
        $this->toppings[] = 'ペパロニ';
    }
}

/**
 * Factoryクラス
 */
class SimplePizzaFactory
{
    /**
     * ピザの作成
     *
     * @param string $type
     * @return Pizza
     */
    public function createPizza(string $type): Pizza
    {
        $pizza = null;
        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza();
                break;
            case 'clam':
                $pizza = new ClamPizza();
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza();
                break;
        }

        return $pizza;
    }
}

/**
 * Factoryを使うクライアント
 */
class PizzaStore
{
    /**
     * ピザを作成するFactory
     *
     * @var SimplePizzaFactory
     */
    private SimplePizzaFactory $factory;

    /**
     * コンストラクタ
     *
     * @param SimplePizzaFactory $factory
     */
    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * ピザの注文
     *
     * @param string $type
     * @return Pizza
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->factory->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}

// 注文してみる
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
