<?php

namespace Command\Appliance\Stereo;

use Command\Command;

class StereoOffWithCDCommand implements Command
{
    private Stereo $stereo;

    /**
     * StereoOffWithCDCommand constructor.
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->off();
    }

    public function undo(): void
    {
        $this->stereo->on();
    }
}