<?php


namespace Chapter1;


class MuteQuack implements QuackBehavior
{

    public function quack(): void
    {
        echo "沈黙\n";
    }
}