<?php


namespace Decorator;


class Mocha extends CondimentDecorator
{
    private Beverage $beverage;

    /**
     * Mocha constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', モカ';
    }

    public function cost(): float
    {
        return .20 + $this->beverage->cost();
    }
}