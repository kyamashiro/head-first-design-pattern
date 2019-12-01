<?php

namespace Command\Appliance\Stereo;

use Command\Location;
use Command\Volume;

class Stereo
{
    private Location $place;
    private Volume $volume;

    /**
     * Stereo constructor.
     * @param Location $place
     */
    public function __construct(Location $place)
    {
        $this->place = $place;
    }

    public function on(): void
    {
        echo "{$this->place->getValue()} ステレオの電源が入っています\n";
    }

    public function off(): void
    {
        echo "{$this->place->getValue()} ステレオの電源が切れています\n";
    }

    public function setCd()
    {
        echo "{$this->place->getValue()} ステレオがCD入力に設定されています\n";
    }

    public function setDvd()
    {

    }

    public function setRadio()
    {

    }

    public function setVolume(Volume $volume): void
    {
        $this->volume = $volume;
        echo "ステレオのボリュームが{$this->volume->getSize()}に設定されています\n";
    }
}