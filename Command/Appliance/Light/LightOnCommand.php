<?php

namespace Command\Appliance\Light;

use Command\Command;

class LightOnCommand implements Command
{
    private Light $light;

    /**
     * LightOnCommand constructor.
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }

    public function undo(): void
    {
        $this->light->off();
    }
}