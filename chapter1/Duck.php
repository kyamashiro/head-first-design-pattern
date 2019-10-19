<?php


namespace Chapter1;


abstract class Duck
{
    private FlyBehavior $flyBehavior;
    private QuackBehavior $quackBehavior;

    /**
     * Duck constructor.
     * @param FlyBehavior $flyBehavior
     * @param QuackBehavior $quackBehavior
     */
    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    public function swim(): void
    {
        echo "泳ぐ\n";
    }

    abstract function display(): void;
}