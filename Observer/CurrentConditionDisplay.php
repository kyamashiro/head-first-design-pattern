<?php

namespace Observer;

class CurrentConditionDisplay implements Observer, DisplayElement
{
    private float $temperature;
    private float $humidity;
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
        $this->humidity = $humidity;
        $this->display();
    }

    public function display(): void
    {
        echo "現在の気象状況:温度{$this->temperature}度 湿度{$this->humidity}%\n";
    }
}