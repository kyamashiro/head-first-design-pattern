<?php

namespace AbstractFactory\Ingredient\Sauce;

class MarinaraSauce implements Sauce
{
    public function getName(): string
    {
        return 'マリナラソース';
    }
}