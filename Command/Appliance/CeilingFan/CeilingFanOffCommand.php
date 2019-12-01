<?php


namespace Command\Appliance\CeilingFan;


use Command\Command;

class CeilingFanOffCommand implements Command
{
    private CeilingFan $ceilingFan;
    private FanSpeed $prevSpeed;

    /**
     * CeilingFanHighCommand constructor.
     * @param CeilingFan $ceilingFan
     */
    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->off();
    }

    public function undo(): void
    {
        $this->ceilingFan->setSpeed($this->prevSpeed);
        echo "扇風機 {$this->prevSpeed->toString()}\n";
    }
}