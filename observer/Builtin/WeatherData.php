<?php

namespace Observer\Builtin;

use SplObjectStorage;
use SplObserver;
use SplSubject;

/**
 * Class WeatherData
 */
class WeatherData implements SplSubject
{
    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $observers;
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
        $this->observers = new SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    /**
     * 気候情報をセットする
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
        $this->notify();
    }

    /**
     * SplObjectStorageに登録されたオブザーバを取り出して通知する
     */
    public function notify(): void
    {
        $this->observers->rewind();
        while ($this->observers->valid()) {
            $observer = $this->observers->current();
            /** @var SplObserver $observer */
            $observer->update($this);
            $this->observers->next();
        }
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->humidity;
    }
}