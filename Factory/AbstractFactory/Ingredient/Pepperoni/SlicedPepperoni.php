<?php

namespace AbstractFactory\Ingredient\Pepperoni;

class SlicedPepperoni implements Pepperoni
{
    public function getName(): string
    {
        return 'スライスしたペパロニ';
    }
}