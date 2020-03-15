<?php

namespace HeadFirst;

interface Command
{
    public function execute();
    public function undo();
}

class LightOnCommand implements Command
{
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }

    public function undo()
    {
        $this->light->off();
    }
}

class LightOffCommand implements Command
{
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}

class FanCommand implements Command
{
    public $fan;
    public $previous;

    public function __construct(Fan $fan)
    {
        $this->fan = $fan;
    }

    public function execute()
    {
        $this->previous = $this->fan->getSpeed();
        $this->fan->high();
    }

    public function undo()
    {
        switch ($this->previous) {
            case Fan::OFF:
                $this->fan->off();
                break;
            case Fan::HIGH:
                $this->fan->high();
                break;
            case Fan::MEDIUM:
                $this->fan->medium();
                break;
            case Fan::LOW:
                $this->fan->low();
                break;
        }
    }
}

class NoCommand implements Command
{
    public function execute()
    {
    }
    public function undo()
    {
    }
}
