<?php

use Singleton\ChocolateBoiler;

require 'vendor/autoload.php';

$boiler = ChocolateBoiler::getInstance();
$boiler->fill();
$boiler->boil();

$boiler = ChocolateBoiler::getInstance();
$boiler->fill();
$boiler->boil();
$boiler->drain();
