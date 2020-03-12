<?php

namespace HeadFirst;

abstract class Sauce
{
    public function __construct()
    {
        echo get_class($this) . " 추가\n";
    }
}

class MarinaraSauce extends Sauce
{
}