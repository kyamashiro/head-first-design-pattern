<?php

namespace AbstractFactory\Ingredient\Veggies;

class Garlic implements Veggies
{
    public function getName(): string
    {
        return 'ガーリック';
    }
}