<?php


namespace Chapter1;


class MallardDuck extends Duck
{
    /**
     * MallardDuck constructor.
     * @param FlyBehavior $flyBehavior
     * @param QuackBehavior $quackBehavior
     */
    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
    {
        parent::__construct($flyBehavior, $quackBehavior);
    }

    function display(): void
    {
        echo "マガモ\n";
    }
}