<?php

namespace MySelf;

class Calc
{
    protected $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function add(int $i = 1)
    {
        $this->number += $i;
        return $this;
    }

    public function sub(int $i = 1)
    {
        $this->number -= $i;
        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }
}

$calc = new Calc(10);
$calc->add()->add()->add()->add()->add()->add()->add()->sub();

echo $calc->getNumber();