<?php

namespace AbstractFactory\Ingredient\Clams;

class FreshClams implements Clams
{
    public function getName(): string
    {
        return '新鮮なクラム';
    }
}