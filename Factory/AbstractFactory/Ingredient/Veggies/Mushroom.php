<?php

namespace AbstractFactory\Ingredient\Veggies;

class Mushroom implements Veggies
{
    public function getName(): string
    {
        return 'きのこ';
    }
}