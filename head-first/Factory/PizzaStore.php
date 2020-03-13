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

    abstract protected function createPizza(string $type);
}

class NYPizzaStore extends PizzaStore
{
    protected function createPizza($type)
    {
        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName("NY Style cheese");
        } elseif ($type === 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName("NY Style veggie");
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName("NY Style Peperoni");
        }

        return $pizza;
    }
}

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza($type)
    {
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName("Chicago Style cheese");
        } elseif ($type === 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName("Chicago Style veggie");
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName("Chicago Style Peperoni");
        }

        return $pizza;
    }
}