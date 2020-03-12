<?php

namespace HeadFirst;

interface PizzaIngredientFactory
{
    public function createDough();
    public function createSauce();
    public function createCheese();
    public function createVeggies();
    public function createPepperoni();
    public function createClams();
}

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough()
    {
        return new ThinCrustDough();
    }

    public function createSauce()
    {
        return new MarinaraSauce();
    }

    public function createCheese()
    {
        return new ReggianoCheese();
    }

    public function createVeggies()
    {
        $veggies = [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
        return $veggies;
    }

    public function createPepperoni()
    {
        return new SlicePeperoni();
    }

    public function createClams()
    {
        return new FreshClams();
    }
}

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough()
    {
        return new ThinCrustDough();
    }

    public function createSauce()
    {
        return new MarinaraSauce();
    }

    public function createCheese()
    {
        return new ReggianoCheese();
    }

    public function createVeggies()
    {
        $veggies = [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
        return $veggies;
    }

    public function createPepperoni()
    {
        return new SlicePeperoni();
    }

    public function createClams()
    {
        return new FrozenClams();
    }
}