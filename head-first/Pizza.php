<?php

namespace HeadFirst;

class CheesePizza
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

class GreekPizza
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

class PepperoniPizza
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