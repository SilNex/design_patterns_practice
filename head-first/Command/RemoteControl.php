<?php

namespace HeadFirst;

class RemoteControl
{
    protected $onCommands;
    protected $offCommands;
    protected $undoCommand;

    public function __construct()
    {
        for ($i = 0; $i < 7; $i++) { 
            $this->onCommands[$i] = new NoCommand;
            $this->offCommands[$i] = new NoCommand;
        }

        $this->undoCommand = new NoCommand;
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot)
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed(int $slot)
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed() 
    {
        $this->undoCommand->undo();
    }

    public function __toString()
    {
        $stringBuff = "\n------ Remote Control ------\n";
        for ($i=0; $i < count($this->onCommands); $i++) { 
            $stringBuff .= "[slot] {$i} " . get_class($this->onCommands[$i]) . "\t" . get_class($this->offCommands[$i]) . "\n";
        }

        $stringBuff .="[slot] x " . get_class($this->undoCommand) . "\n" ;

        return $stringBuff;
    }
}
