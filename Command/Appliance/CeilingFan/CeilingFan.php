<?php


namespace Command\Appliance\CeilingFan;


use Command\Location;

class CeilingFan
{
    private Location $location;
    private FanSpeed $speed;

    /**
     * CeilingFan constructor.
     * @param Location $location
     */
    public function __construct(Location $location)
    {
        $this->location = $location;
        $this->speed = FanSpeed::OFF();
    }

    public function high(): void
    {
        $this->speed = FanSpeed::HIGH();
        echo "扇風機 強\n";
    }

    public function medium(): void
    {
        $this->speed = FanSpeed::MEDIUM();
        echo "扇風機 中\n";
    }

    public function low(): void
    {
        $this->speed = FanSpeed::LOW();
        echo "扇風機 弱\n";
    }

    public function off(): void
    {
        $this->speed = FanSpeed::OFF();
        echo "扇風機 オフ\n";
    }

    public function getSpeed(): FanSpeed
    {
        return $this->speed;
    }

    /**
     * @param FanSpeed $speed
     */
    public function setSpeed(FanSpeed $speed): void
    {
        $this->speed = $speed;
    }
}