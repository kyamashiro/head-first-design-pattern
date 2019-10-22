<?php

namespace Observer;

/**
 * Class WeatherData
 */
class WeatherData implements Subject
{
    /**
     * @var Observer[]
     */
    private array $observers;
    /**
     * @var float
     */
    private float $temperature;
    /**
     * @var float
     */
    private float $humidity;
    /**
     * @var float
     */
    private float $pressure;

    /**
     * WeatherData constructor.
     */
    public function __construct()
    {
        $this->observers = [];
    }

    /**
     * WeatherDataの値の変化をオブザーバに伝えるためサブジェクトに登録する
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * @param Observer $observer
     */
    public function removeObserver(Observer $observer): void
    {
        foreach ($this->observers as $index => $observers) {
            if ($observers === $observer) {
                unset($this->observers[$index]);
            }
        }
    }

    /**
     * 気候状態をセットする
     * オブザーバを登録した状態で気候状態をセットするとオブザーバに通知される
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     */
    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    /**
     * 更新された設定値が設定されたら通知を送る
     */
    private function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    /**
     * オブザーバに通知する
     */
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }
}