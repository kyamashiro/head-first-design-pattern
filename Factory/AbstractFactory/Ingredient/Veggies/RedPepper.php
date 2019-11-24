<?php

namespace AbstractFactory\Ingredient\Veggies;

class RedPepper implements Veggies
{
    public function getName(): string
    {
        return 'レッドペッパー';
    }
}