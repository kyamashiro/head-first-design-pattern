<?php


namespace Decorator;


class HouseBlend extends Beverage
{
    /**
     * HouseBlend constructor.
     */
    public function __construct()
    {
        $this->description = 'ハウスブレンドコーヒー';
    }

    public function cost(): float
    {
        return .89;
    }
}