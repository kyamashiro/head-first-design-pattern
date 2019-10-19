<?php


namespace Chapter1;


class Squeak implements QuackBehavior
{

    public function quack(): void
    {
        echo "キューキュー\n";
    }
}