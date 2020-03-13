<?php

namespace HeadFirst;

abstract class Vegetable
{
    public function __construct()
    {
        echo get_class($this) . " 추가\n";
    }
}

class Garlic extends Vegetable
{
}

class Onion extends Vegetable
{
}

class Mushroom extends Vegetable
{
}

class RedPepper extends Vegetable
{
}
