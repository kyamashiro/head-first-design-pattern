<?php


namespace Chapter1;


class FlyNoWay implements FlyBehavior
{

    public function fly(): void
    {
        echo "飛べません\n";
    }
}