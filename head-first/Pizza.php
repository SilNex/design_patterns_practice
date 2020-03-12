<?php

namespace HeadFirst;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = [];

    public function prepare()
    {
        echo "{$this->name} 피자 준비... \n";
        echo "도우 준비\n";
        echo "소스 추가\n";
        echo "토핑 추가 : ";
        foreach ($this->toppings as $topping) {
            echo "{$topping} ";
        }
        echo "\n";
    }

    public function bake()
    {
        echo "{$this->name} 파자 굽기 \n";
    }

    public function cut()
    {
        echo "{$this->name} 파자 자르기 \n";
    }

    public function box()
    {
        echo "{$this->name} 피자 포장";
    }

    public function getName()
    {
        return $this->name;
    }

}


class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Cheese';
        $this->dough = 'Thin';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'toppings';
    }
}

class NYStyleGreekPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Greek';
        $this->dough = 'Thin';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'toppings';
    }
}

class NYStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Pepperoni';
        $this->dough = 'Thin';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'toppings';
    }
}

class ChicagoStyleCheesePizza
{
    public function prepare()
    {
        echo 'CheesePizza 피자 준비'.PHP_EOL;
    }

    public function bake()
    {
        echo 'CheesePizza 빵굽기'.PHP_EOL;
    }

    public function cut()
    {
        echo 'CheesePizza 빵자르기'.PHP_EOL;
    }
    
    public function box()
    {
        echo 'CheesePizza 박스에 담기'.PHP_EOL;
    }
}

class ChicagoStyleGreekPizza
{
    public function prepare()
    {
        echo 'GreekPizza 피자 준비'.PHP_EOL;
    }

    public function bake()
    {
        echo 'GreekPizza 빵굽기'.PHP_EOL;
    }

    public function cut()
    {
        echo 'GreekPizza 빵자르기'.PHP_EOL;
    }
    
    public function box()
    {
        echo 'GreekPizza 박스에 담기'.PHP_EOL;
    }
}

class ChicagoStylePepperoniPizza
{
    public function prepare()
    {
        echo '피자PepperoniPizza  준비'.PHP_EOL;
    }

    public function bake()
    {
        echo 'PepperoniPizza 빵굽기'.PHP_EOL;
    }

    public function cut()
    {
        echo 'PepperoniPizza 빵자르기'.PHP_EOL;
    }
    
    public function box()
    {
        echo 'PepperoniPizza 박스에 담기'.PHP_EOL;
    }
}

