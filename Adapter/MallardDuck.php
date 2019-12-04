<?php


class MallardDuck implements Duck
{
    public function quack(): void
    {
        echo "ガーガー\n";
    }

    public function fly(): void
    {
        echo "飛んでいます\n";
    }
}