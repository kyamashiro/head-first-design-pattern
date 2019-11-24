<?php

namespace AbstractFactory\Ingredient\Cheese;

class ReggianoCheese implements Cheese
{
    public function getName(): string
    {
        return 'レッジャーノチーズ';
    }
}