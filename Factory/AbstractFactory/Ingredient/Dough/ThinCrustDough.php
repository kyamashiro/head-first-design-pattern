<?php

namespace AbstractFactory\Ingredient\Dough;

class ThinCrustDough implements Dough
{
    public function getName(): string
    {
        return '薄い生地';
    }
}