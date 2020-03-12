<?php

namespace HeadFirst;

abstract class Ham
{
    public function __construct()
    {
        echo get_class($this) . " 추가\n";
    }
}

class SlicePeperoni extends Ham
{
}
