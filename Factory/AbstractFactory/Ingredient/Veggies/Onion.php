<?php

namespace AbstractFactory\Ingredient\Veggies;

class Onion implements Veggies
{
    public function getName(): string
    {
        return 'タマネギ';
    }
}