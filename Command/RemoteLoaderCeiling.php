<?php

use Command\Appliance\CeilingFan\CeilingFan;
use Command\Appliance\CeilingFan\CeilingFanHighCommand;
use Command\Appliance\CeilingFan\CeilingFanMediumCommand;
use Command\Appliance\CeilingFan\CeilingFanOffCommand;
use Command\Location;
use Command\RemoteControl;

require 'vendor/autoload.php';

$remoteControl = new RemoteControl();
$ceilingFan = new CeilingFan(Location::livingRoom());
$ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
$ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

$remoteControl->setCommand(0, $ceilingFanMedium, $ceilingFanOff);
$remoteControl->setCommand(1, $ceilingFanHigh, $ceilingFanOff);

$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
$remoteControl->undoButtonWasPushed();
$remoteControl->onButtonWasPushed(1);
$remoteControl->undoButtonWasPushed();