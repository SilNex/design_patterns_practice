<?php

namespace HeadFirst;

abstract class Dough
{
    public function __construct()
    {
        echo get_class($this) . " 추가\n";
    }
}

class ThinCrustDough extends Dough
{
}