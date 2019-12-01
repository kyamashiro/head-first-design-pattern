<?php

namespace Command\Appliance\Stereo;

use Command\Command;
use Command\Volume;

class StereoOnWithCDCommand implements Command
{
    private Stereo $stereo;

    /**
     * StereoOnWithCDCommand constructor.
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(new Volume(11));
    }

    public function undo(): void
    {
        $this->stereo->off();
    }
}