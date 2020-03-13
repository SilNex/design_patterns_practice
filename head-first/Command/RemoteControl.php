<?php

namespace HeadFirst;

class RemoteControl
{
    protected $onCommands;
    protected $offCommands;

    public function __construct()
    {
        for ($i = 0; $i < 7; $i++) { 
            $this->onCommands[$i] = new NoCommand();
            $this->offCommands[$i] = new NoCommand();
        }
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot)
    {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed(int $slot)
    {
        $this->offCommands[$slot]->execute();
    }

    public function __toString()
    {
        $stringBuff = "\n------ Remote Control ------\n";
        var_dump($this->onCommands);
        for ($i=0; $i < count($this->onCommands); $i++) { 
            $stringBuff .= "[slot]{$i} " . get_class($this->onCommands[$i]) . "\t" . get_class($this->offCommands[$i]) . "\n";
        }

        return $stringBuff;
    }
}
