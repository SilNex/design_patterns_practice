<?php

namespace HeadFirst;

// autoload
require('./Command.php');
require('./Reciver.php');
require('./RemoteControl.php');

// Invoker
$remoteControl = new RemoteControl();
// Receiver
$light = new Light();
$fan = new Fan();

// Command or ConcreteCommand
$lightOn = new LightOnCommand($light);
$lightOff = new LightOffCommand($light);

$fanCmd = new FanCommand($fan);

$macro = new MacroCommand([
    new LightOnCommand($light),
    new LightOffCommand($light),
    new LightOnCommand($light),
    new LightOffCommand($light),
    new LightOnCommand($light),
    new LightOffCommand($light),
    new FanCommand($fan),
]);

$remoteControl->setCommand(0, $lightOn, $lightOff);
$remoteControl->setCommand(1, $fanCmd, new NoCommand);
$remoteControl->setCommand(2, $macro, new NoCommand);
echo $remoteControl;
// $remoteControl->onButtonWasPushed(0);
$remoteControl->onButtonWasPushed(2);
// $remoteControl->undoButtonWasPushed();
echo $remoteControl;
// $remoteControl->offButtonWasPushed(0);
// $remoteControl->undoButtonWasPushed();
