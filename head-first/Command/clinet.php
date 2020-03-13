<?php

namespace HeadFirst;

// autoload
require('./Command.php');
require('./Reciver.php');
require('./RemoteControl.php');


$remoteControl = new RemoteControl();
$light = new Light();

$lightOn = new LightOnCommand($light);
$lightOff = new LightOffCommand($light);

$remoteControl->setCommand(0, $lightOn, $lightOff);
echo $remoteControl;
$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);