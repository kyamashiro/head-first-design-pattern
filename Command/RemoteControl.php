<?php

namespace Command;

class RemoteControl
{
    /**
     * @var Command[]
     */
    private array $onCommands;
    /**
     * @var Command[]
     */
    private array $offCommands;

    private Command $undoCommand;

    /**
     * RemoteControl constructor.
     */
    public function __construct()
    {
        $noCommand = new NoCommand();
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }
        $this->undoCommand = $noCommand;
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot)
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed(int $slot)
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed(): void
    {
        $this->undoCommand->undo();
    }

    public function toString(): string
    {
        $str = "\n-----リモコン-----\n";
        foreach ($this->onCommands as $index => $item) {
            $on = get_class($item);
            $off = get_class($this->offCommands[$index]);
            $str .= "[スロット {$index}] {$on} {$off}\n";
        }
        $undo = get_class($this->undoCommand);
        $str .= "[アンドゥ] {$undo}\n";

        return $str;
    }
}