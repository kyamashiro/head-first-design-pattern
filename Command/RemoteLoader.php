<?php

namespace Command;

use Command\Appliance\Light\Light;
use Command\Appliance\Light\LightOffCommand;
use Command\Appliance\Light\LightOnCommand;
use Command\Appliance\Stereo\Stereo;
use Command\Appliance\Stereo\StereoOffWithCDCommand;
use Command\Appliance\Stereo\StereoOnWithCDCommand;

require 'vendor/autoload.php';

// Invoker
$remoteControl = new RemoteControl();

// Reciever
$livingRoomLight = new Light(Location::livingRoom());
$kitchenRoomLight = new Light(Location::kitchenRoom());
$stereo = new Stereo(Location::livingRoom());

// ConcreteCommand Commandインターフェースを実装している
$livingRoomLightOn = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);
$kitchenRoomLightOn = new LightOnCommand($kitchenRoomLight);
$kitchenRoomLightOff = new LightOffCommand($kitchenRoomLight);
$stereoOnWithCDCommand = new StereoOnWithCDCommand($stereo);
$stereoOffWithCDCommand = new StereoOffWithCDCommand($stereo);

// Commandをセット
// Invokerはコマンドを保持する
$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remoteControl->setCommand(1, $kitchenRoomLightOn, $kitchenRoomLightOff);
$remoteControl->setCommand(2, $stereoOnWithCDCommand, $stereoOffWithCDCommand);

// 特定のスロットのボタンを押すとそのスロットに実装されたRecieverが実行される
$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
$remoteControl->undoButtonWasPushed();
$remoteControl->onButtonWasPushed(1);
$remoteControl->offButtonWasPushed(1);
$remoteControl->onButtonWasPushed(2);
$remoteControl->offButtonWasPushed(2);
$remoteControl->undoButtonWasPushed();