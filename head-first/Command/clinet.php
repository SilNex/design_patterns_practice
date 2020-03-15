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

$fan = new FanCommand($fan);

$remoteControl->setCommand(0, $lightOn, $lightOff);
$remoteControl->setCommand(1, $fan, new NoCommand);
echo $remoteControl;
$remoteControl->onButtonWasPushed(0);
$remoteControl->onButtonWasPushed(1);
$remoteControl->undoButtonWasPushed();
echo $remoteControl;
$remoteControl->offButtonWasPushed(0);
$remoteControl->undoButtonWasPushed();
