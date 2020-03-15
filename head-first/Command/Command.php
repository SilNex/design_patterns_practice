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

class NoCommand implements Command
{
    public function execute()
    {
    }
    public function undo()
    {
    }
}
