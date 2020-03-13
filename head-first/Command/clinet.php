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

// Command or ConcreteCommand
$lightOn = new LightOnCommand($light);
$lightOff = new LightOffCommand($light);

$remoteControl->setCommand(0, $lightOn, $lightOff);
echo $remoteControl;
$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);