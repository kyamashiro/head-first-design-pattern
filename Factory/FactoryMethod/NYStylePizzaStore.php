<?php

namespace FactoryMethod;

class NYStylePizzaStore extends PizzaStore
{
    public function createPizza(PizzaType $type): Pizza
    {
        if ($type->equals(PizzaType::CHEEZE())) {
            return new NYStyleCheesePizza();
        } elseif ($type->equals(PizzaType::VEGE())) {
            return new NYStyleVeggiePizza();
        }
    }
}