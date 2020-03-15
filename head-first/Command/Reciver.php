<?php

namespace HeadFirst;

class Light
{
    public function on()
    {
        echo "Light ON\n";
    }

    public function off()
    {
        echo "Light OFF\n";
    }
}

class Fan
{
    const HIGH = 'high';
    const MEDIUM = 'medium';
    const LOW = 'low';
    const OFF = 'off';

    protected $speed;

    public function __construct()
    {
        $this->speed = self::OFF;
    }
    
    public function high()
    {
        echo "Fan speed set HIGH\n";
        $this->speed = self::HIGH;
    }

    public function medium()
    {
        echo "Fan speed set MEDIUM\n";
        $this->speed = self::MEDIUM;
    }

    public function low()
    {
        echo "Fan speed set LOW\n";
        $this->speed = self::LOW;
    }

    public function off()
    {
        echo "Fan speed set OFF\n";
        $this->speed = self::OFF;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}