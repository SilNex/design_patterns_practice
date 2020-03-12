<?php

namespace HeadFirst;

class PizzaStore
{
    public function __construct()
    {
        $this->pizzaFactory = new SimplePizzaFactory();
    }

    public function orderPizza(string $type)
    {
        $pizza = $this->pizzaFactory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}

class SimplePizzaFactory
{
    public function createPizza(string $type)
    {
        if ($type === 'cheese') {
            $pizza = new CheesePizza();
        } elseif ($type === 'greek') {
            $pizza = new GreekPizza();
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza();
        }

        return $pizza;
    }
}