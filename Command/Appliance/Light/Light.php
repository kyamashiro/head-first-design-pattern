<?php

namespace Command\Appliance\Light;

use Command\Location;

class Light
{
    private Location $place;

    /**
     * Light constructor.
     * @param Location $place
     */
    public function __construct(Location $place)
    {
        $this->place = $place;
    }

    public function off()
    {
        echo "{$this->place} 照明が消えています\n";
    }

    public function on()
    {
        echo "{$this->place} 照明がついています\n";
    }
}