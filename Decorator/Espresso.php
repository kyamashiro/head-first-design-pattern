<?php


namespace Decorator;


class Espresso extends Beverage
{
    /**
     * Espresso constructor.
     */
    public function __construct()
    {
        $this->description = 'エスプレッソ';
    }

    public function cost(): float
    {
        return 1.99;
    }
}