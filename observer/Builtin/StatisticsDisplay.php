<?php

namespace Observer\Builtin;

use SplObserver;
use SplSubject;

class StatisticsDisplay implements SplObserver
{
    private float $temperature;
    private SplSubject $weatherData;

    /**
     * StatisticsDisplay constructor.
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
            $this->display();
        }
    }

    public function display(): void
    {
        echo "平均/最高/最低 {$this->temperature}/{$this->temperature}/{$this->temperature}\n";
    }
}