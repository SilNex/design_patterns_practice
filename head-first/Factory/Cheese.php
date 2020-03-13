<?php

namespace HeadFirst;

abstract class Cheese
{
    public function __construct()
    {
        echo get_class($this) . " 추가\n";
    }
}

class ReggianoCheese extends Cheese
{
}