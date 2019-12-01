<?php

namespace Command\Appliance\Light;

use Command\Command;

class LightOffCommand implements Command
{
    private Light $light;

    /**
     * LightOffCommand constructor.
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->on();
    }
}