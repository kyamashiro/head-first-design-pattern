<?php

namespace Observer\Builtin;

use SplObserver;
use SplSubject;

class CurrentConditionDisplay implements SplObserver
{
    private float $temperature;
    private float $humidity;
    private SplSubject $weatherData;

    /**
     * CurrentConditionDisplay constructor.
     * @param SplSubject $weatherData
     */
    public function __construct(SplSubject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->attach($this);
    }

    public function update(SplSubject $subject): void
    {
        if ($subject instanceof WeatherData) {
            $this->temperature = $subject->getTemperature();
            $this->humidity = $subject->getHumidity();
            $this->display();
        }
    }

    public function display(): void
    {
        echo "現在の気象状況:温度{$this->temperature}度 湿度{$this->humidity}%\n";
    }
}