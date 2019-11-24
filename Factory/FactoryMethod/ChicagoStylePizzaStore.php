<?php


namespace FactoryMethod;


class ChicagoStylePizzaStore extends PizzaStore
{
    function createPizza(PizzaType $type): Pizza
    {
        if ($type->equals(PizzaType::CHEEZE())) {
            return new ChicagoStyleCheezePizza();
        } elseif ($type->equals(PizzaType::VEGE())) {
            return new ChicagoStyleVeggiePizza();
        }
    }
}