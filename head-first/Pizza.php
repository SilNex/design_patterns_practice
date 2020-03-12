<?php

namespace HeadFirst;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $veegies;
    protected $cheese;
    protected $pepperoni;
    protected $clams;

    abstract public function prepare();

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
        echo "{$this->name} 피자 포장\n";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

}

class CheesePizza extends Pizza
{
    protected $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        echo "{$this->name} 피자 준비\n";
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}

class VeggiePizza extends Pizza
{
    protected $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        echo "{$this->name} 피자 준비\n";
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->veegies = $this->ingredientFactory->createVeggies();
    }
}

class PepperoniPizza extends Pizza
{
    protected $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        echo "{$this->name} 피자 준비\n";
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->pepperoni = $this->ingredientFactory->createPepperoni();
    }
}