<?php

namespace HeadFirst;

interface Command
{
    public function execute();
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
}

class NoCommand implements Command
{
    public function execute()
    {
    }
}
