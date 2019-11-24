<?php

namespace Observer;

class StatisticsDisplay implements Observer, DisplayElement
{
    private float $temperature;
    private Subject $weatherData;

    /**
     * CurrentConditionDisplay constructor.
     * @param Subject $weatherData
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->display();
    }

    public function display(): void
    {
        echo "平均/最高/最低 {$this->temperature}/{$this->temperature}/{$this->temperature}\n";
    }
}