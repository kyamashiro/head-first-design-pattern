<?php

namespace Decorator;

abstract class Beverage
{
    protected string $description = '不明な飲み物';

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    protected abstract function cost(): float;
}