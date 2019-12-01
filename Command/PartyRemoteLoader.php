<?php

use Command\Appliance\CeilingFan\CeilingFan;
use Command\Appliance\CeilingFan\CeilingFanHighCommand;
use Command\Appliance\CeilingFan\CeilingFanOffCommand;
use Command\Appliance\Light\Light;
use Command\Appliance\Light\LightOffCommand;
use Command\Appliance\Light\LightOnCommand;
use Command\Appliance\Stereo\Stereo;
use Command\Appliance\Stereo\StereoOffWithCDCommand;
use Command\Appliance\Stereo\StereoOnWithCDCommand;
use Command\Location;
use Command\MacroCommand;
use Command\RemoteControl;

require 'vendor/autoload.php';

$remoteControl = new RemoteControl();
$livingRoomLight = new Light(Location::livingRoom());
$stereo = new Stereo(Location::livingRoom());

$livingRoomLightOn = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);

$ceilingFan = new CeilingFan(Location::livingRoom());
$ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

$stereoOnWithCDCommand = new StereoOnWithCDCommand($stereo);
$stereoOffWithCDCommand = new StereoOffWithCDCommand($stereo);

$partyOn = [$livingRoomLightOn, $ceilingFanHigh, $stereoOnWithCDCommand];
$partyOff = [$livingRoomLightOff, $ceilingFanOff, $stereoOffWithCDCommand];

$partyOnMacro = new MacroCommand($partyOn);
$partyOffMacro = new MacroCommand($partyOff);
$remoteControl->setCommand(0, $partyOnMacro, $partyOffMacro);

echo "=====ボタンオン=====\n";
$remoteControl->onButtonWasPushed(0);
echo "=====ボタンオフ=====\n";
$remoteControl->offButtonWasPushed(0);
echo "=====アンドゥ=====\n";
$remoteControl->undoButtonWasPushed();