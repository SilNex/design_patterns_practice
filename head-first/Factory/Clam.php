<?php

namespace HeadFirst;

abstract class Clam
{
    public function __construct()
    {
        echo get_class($this) . " 추가\n";
    }
}

class FreshClams extends Clam
{
}

class FrozenClams extends Clam
{
}