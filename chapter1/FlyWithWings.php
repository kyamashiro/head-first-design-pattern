<?php


namespace Chapter1;


class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "飛んでいます\n";
    }
}