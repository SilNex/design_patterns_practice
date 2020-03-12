<?php

namespace HeadFirst;

abstract class PizzaStore
{
    public function orderPizza(string $type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract public function createPizza(string $type);
}

class NYPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        if ($type === 'cheese') {
            $pizza = new NYStyleCheesePizza();
        } elseif ($type === 'greek') {
            $pizza = new NYStyleGreekPizza();
        } elseif ($type === 'pepperoni') {
            $pizza = new NYStylePepperoniPizza();
        }

        return $pizza;
    }
}

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        if ($type === 'cheese') {
            $pizza = new ChicagoStyleCheesePizza();
        } elseif ($type === 'greek') {
            $pizza = new ChicagoStyleGreekPizza();
        } elseif ($type === 'pepperoni') {
            $pizza = new ChicagoStylePepperoniPizza();
        }

        return $pizza;
    }
}