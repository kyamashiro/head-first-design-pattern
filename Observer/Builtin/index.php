<?php
require './vendor/autoload.php';

use Observer\Builtin\CurrentConditionDisplay;
use Observer\Builtin\StatisticsDisplay;
use Observer\Builtin\WeatherData;

$weatherData = new WeatherData();
$currentDisplay = new CurrentConditionDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);
$weatherData->setMeasurements(27.0, 65, 30.4);
$weatherData->detach($currentDisplay);
$weatherData->notify();