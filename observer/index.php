<?php
require './vendor/autoload.php';

use Observer\CurrentConditionDisplay;
use Observer\StatisticsDisplay;
use Observer\WeatherData;

$weatherData = new WeatherData();
$currentDisplay = new CurrentConditionDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);
$weatherData->setMeasurements(27.0, 65, 30.4);
// オブザーバの削除
$weatherData->removeObserver($currentDisplay);
$weatherData->notifyObservers();