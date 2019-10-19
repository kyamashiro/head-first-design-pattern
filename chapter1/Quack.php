<?php


namespace Chapter1;


class Quack implements QuackBehavior
{
    public function quack(): void
    {
        echo "ガーガー\n";
    }
}