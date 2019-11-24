<?php


namespace Decorator;


class Whip extends CondimentDecorator
{
    private Beverage $beverage;

    /**
     * Whip constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', ホイップ';
    }

    public function cost(): float
    {
        return .5 + $this->beverage->cost();
    }
}