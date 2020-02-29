<?php

interface Builder
{
    public function productPartA(): void;

    public function productPartB(): void;

    public function productPartC(): void;
}

class ConcreteBuilder1 implements Builder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->product = new Product1;
    }

    public function productPartA(): void
    {
        $this->product->parts[] = 'PartA1';
    }

    public function productPartB(): void
    {
        $this->product->parts[] = 'PartB1';
    }

    public function productPartC(): void
    {
        $this->product->parts[] = 'PartC1';
    }
    
    public function getProduct(): Product1
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}

class Product1
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class Director
{
    private $builder;

    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildMinimalViableProduct(): void
    {
        $this->builder->productPartA();
    }

    public function buildFullFeatureProduct(): void
    {
        $this->builder->productPartA();
        $this->builder->productPartB();
        $this->builder->productPartC();
    }
}

function clientCode(Director $director)
{
    $builder = new ConcreteBuilder1;
    $director->setBuilder($builder);

    echo "Standard basic product: \n";
    $director->buildMinimalViableProduct();
    $builder->getProduct()->listParts();

    echo "Standard full featured product:\n";
    $director->buildFullFeatureProduct();
    $builder->getProduct()->listParts();

    echo "Custom product";
    $builder->productPartA();
    $builder->productPartC();
    $builder->getProduct()->listParts();
}

$director = new Director;
clientCode($director);